<?php

namespace App\Http\Controllers\Member;

use Illuminate\Http\Request;
use App\Models\TransactionDetail;
use App\Http\Controllers\Controller;
use App\Models\CourseCertification;

class MyCourseController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        // tampung data user yang sedang login kedalam variabel $user.
        $user = $request->user();

        /*
            tampung data transaction detail kedalam variabel $course, kemudian kita memanggil relasi menggunakan with,
            selanjutnya kita melakukan sebuah query untuk mengambil data transaction yang memiliki status success dan seusai dengan user yang sedang login, selanjutnya kita juga melakukan query untuk pencarian data berdasarkan course name, kemudian kita pecah data transaction detail yang kita tampilkan hanya 3 per halaman
            dengan urutan terbaru.
        */
        // $courses = TransactionDetail::with('transaction', 'course.reviews')
        //         ->whereHas('transaction', function($query) use($user){
        //             $query->where('user_id', $user->id)->where('status', 'success');
        //         })->whereHas('course', function($query){
        //             $query->where('name', 'like', '%'. request()->search .'%');
        //         })->latest()->paginate(3);


        // $courses = TransactionDetail::with(['transaction', 'course.reviews', 'course.progress', 'course.videos'])
        //     ->whereHas('transaction', function ($query) use ($user) {
        //         $query->where('user_id', $user->id)->where('status', 'success');
        //     })
        //     ->whereHas('course', function ($query) {
        //         $query->where('name', 'like', '%' . request()->search . '%');
        //     })
        //     ->latest()
        //     ->paginate(3);

        $search = request()->search;
        $courses = TransactionDetail::with([
                'transaction',
                'course.reviews',
                'course.progress' => function ($query) use ($user) {
                    $query->where('user_id', $user->id);
                },
                'course.videos'
            ])
            ->whereHas('transaction', function ($query) use ($user) {
                $query->where('user_id', $user->id)
                    ->where('status', 'success');
            })
            ->whereHas('course', function ($query) use ($search) {
                $query->where('name', 'like', '%' . $search . '%');
            })
            ->latest()
            ->paginate(3);



        // VS CODE ERROR, but its working correctly
        $courses->getCollection()->each(function ($item) {
            // Add progress percentage parameter
            $item->course->percentage = round(($item->course->progress->count() / $item->course->videos->count()) * 100, 0);

            // Get certification row
            $certification = CourseCertification::where('course_id', $item->course_id)
                ->where('user_id', $item->transaction->user_id)
                ->orderBy('updated_at', 'desc')
                ->first();

            // Set certificate_path & and is_done to false
            $item->course->certificate_id = null;
            $item->course->certificate_path = null;


            // Check if certification had row
            if ($certification) {
                // If there any certificate row, course already done althought any new course session added
                $item->course->certificate_id = $certification->id;
                // Check if certificate already printed
                if($certification->is_printed) {
                    $item->course->certificate_path = $certification->certificate_path;
                }
            }
        });

        return view('member.course.mycourse', compact('courses'));
    }
}
