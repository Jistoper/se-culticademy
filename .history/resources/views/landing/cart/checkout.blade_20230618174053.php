@extends('layouts.frontend.app', ['title' => 'Checkout'])

@section('content')
    <div class="w-full p-6 md:p-12 bg-gray-100 h-full">
        <div class="container mx-auto px-4">
            <div class="flex flex-col items-center justify-center gap-y-4 md:gap-y-8 text-center">
                <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 500 500" viewBox="0 0 500 500" width="550" height="550">
  <rect width="500" height="500" fill="#ffffff" class="colorfff svgShape"></rect>
  <path fill="#f7fafc" d="M103.9,430.5c0,0-41.6-19.3-48.7-66.4c-7.1-47.1,11.9-64.7,17.9-76.7c6-12,8.8-26.7,1.8-51.8c-7.1-25.1,4.2-92.5,75.7-107.7c71.5-15.1,178.3,0,178.3,0s77.1,7.3,84.4,65.1c7.3,57.8-7.1,92.4-7.1,92.4s38.9,29.1,48.6,58.1s-17.9,81.4-58.1,91.3L103.9,430.5z" class="colorf7fafc svgShape"></path>
  <rect width="79.1" height="152.6" x="111" y="102.7" fill="#ffffff" stroke="#d2e5ef" stroke-miterlimit="10" stroke-width=".664" transform="rotate(-16.69 150.561 179.009)" class="colorfff svgShape colorStroked2e5ef svgStroke"></rect>
  <rect width="67.8" height="141.3" x="116.6" y="108.3" fill="#d2e5ef" transform="rotate(-16.69 150.561 179.009)" class="colord2e5ef svgShape"></rect>
  <path fill="#ffffff" d="M103.2 119.4c.9 3-.8 6.1-3.8 7-3 .9-6.1-.8-7-3.8-.9-3 .8-6.1 3.8-7C99.1 114.8 102.3 116.4 103.2 119.4zM168.1 100c.9 3-.8 6.1-3.8 7-3 .9-6.1-.8-7-3.8-.9-3 .8-6.1 3.8-7C164.1 95.3 167.3 97 168.1 100zM143.8 254.8c.9 3-.8 6.1-3.8 7-3 .9-6.1-.8-7-3.8-.9-3 .8-6.1 3.8-7C139.7 250.1 142.9 251.8 143.8 254.8zM208.7 235.3c.9 3-.8 6.1-3.8 7-3 .9-6.1-.8-7-3.8-.9-3 .8-6.1 3.8-7C204.7 230.6 207.8 232.3 208.7 235.3zM136.1 309.9c.9 3-.8 6.1-3.8 7-3 .9-6.1-.8-7-3.8-.9-3 .8-6.1 3.8-7C132.1 305.2 135.3 306.9 136.1 309.9zM201 290.4c.9 3-.8 6.1-3.8 7-3 .9-6.1-.8-7-3.8-.9-3 .8-6.1 3.8-7C197 285.8 200.2 287.5 201 290.4zM257.8 203.3c.9 3-.8 6.1-3.8 7-3 .9-6.1-.8-7-3.8-.9-3 .8-6.1 3.8-7C253.8 198.7 257 200.4 257.8 203.3zM245.2 297.7c.9 3-.8 6.1-3.8 7-3 .9-6.1-.8-7-3.8-.9-3 .8-6.1 3.8-7C241.2 293 244.4 294.7 245.2 297.7z" class="colorfff svgShape"></path>
  <circle cx="112.8" cy="132.9" r="3" fill="#99b7cf" class="color99b7cf svgShape"></circle>
  <circle cx="116.9" cy="112.5" r="3" fill="#99b7cf" class="color99b7cf svgShape"></circle>
  <circle cx="101.2" cy="130.7" r="2.6" fill="#99b7cf" class="color99b7cf svgShape"></circle>
  <circle cx="118.3" cy="118.3" r="2.6" fill="#99b7cf" class="color99b7cf svgShape"></circle>
  <circle cx="105.9" cy="115.2" r="1.9" fill="#99b7cf" class="color99b7cf svgShape"></circle>
  <circle cx="120.1" cy="125.4" r="1.9" fill="#99b7cf" class="color99b7cf svgShape"></circle>
  <circle cx="108.3" cy="146" r="1.3" fill="#99b7cf" class="color99b7cf svgShape"></circle>
  <circle cx="124" cy="122.2" r="1.3" fill="#99b7cf" class="color99b7cf svgShape"></circle>
  <circle cx="99.2" cy="141.7" r="1.3" fill="#99b7cf" class="color99b7cf svgShape"></circle>
  <circle cx="112.8" cy="149.7" r="1.3" fill="#99b7cf" class="color99b7cf svgShape"></circle>
  <circle cx="119.1" cy="153.7" r="0.8" fill="#99b7cf" class="color99b7cf svgShape"></circle>
  <circle cx="114.7" cy="156.7" r="0.8" fill="#99b7cf" class="color99b7cf svgShape"></circle>
  <circle cx="114.9" cy="143.1" r="0.8" fill="#99b7cf" class="color99b7cf svgShape"></circle>
  <circle cx="119.2" cy="139.5" r="0.8" fill="#99b7cf" class="color99b7cf svgShape"></circle>
  <circle cx="122.6" cy="144.6" r="0.5" fill="#99b7cf" class="color99b7cf svgShape"></circle>
  <circle cx="117.9" cy="147.4" r="0.5" fill="#99b7cf" class="color99b7cf svgShape"></circle>
  <circle cx="116.3" cy="138.7" r="0.5" fill="#99b7cf" class="color99b7cf svgShape"></circle>
  <circle cx="121.2" cy="135.9" r="0.5" fill="#99b7cf" class="color99b7cf svgShape"></circle>
  <circle cx="110.6" cy="137.2" r="0.5" fill="#99b7cf" class="color99b7cf svgShape"></circle>
  <circle cx="110.1" cy="146" r="0.5" fill="#99b7cf" class="color99b7cf svgShape"></circle>
  <circle cx="111.8" cy="148.3" r="0.3" fill="#99b7cf" class="color99b7cf svgShape"></circle>
  <circle cx="115.6" cy="145.7" r="0.3" fill="#99b7cf" class="color99b7cf svgShape"></circle>
  <circle cx="116.3" cy="141.3" r="0.3" fill="#99b7cf" class="color99b7cf svgShape"></circle>
  <circle cx="113" cy="139.8" r="0.3" fill="#99b7cf" class="color99b7cf svgShape"></circle>
  <circle cx="109.5" cy="143.3" r="0.3" fill="#99b7cf" class="color99b7cf svgShape"></circle>
  <circle cx="109.7" cy="147.6" r="0.3" fill="#99b7cf" class="color99b7cf svgShape"></circle>
  <circle cx="120.3" cy="146.6" r="0.3" fill="#99b7cf" class="color99b7cf svgShape"></circle>
  <circle cx="118.7" cy="142.6" r="0.3" fill="#99b7cf" class="color99b7cf svgShape"></circle>
  <circle cx="115.8" cy="142.8" r="0.3" fill="#99b7cf" class="color99b7cf svgShape"></circle>
  <circle cx="115.6" cy="145.7" r="0.3" fill="#99b7cf" class="color99b7cf svgShape"></circle>
  <circle cx="106.5" cy="137.8" r="0.2" fill="#99b7cf" class="color99b7cf svgShape"></circle>
  <circle cx="107.2" cy="140.6" r="0.2" fill="#99b7cf" class="color99b7cf svgShape"></circle>
  <circle cx="111.1" cy="142.5" r="0.2" fill="#99b7cf" class="color99b7cf svgShape"></circle>
  <circle cx="109.7" cy="144.3" r="0.2" fill="#99b7cf" class="color99b7cf svgShape"></circle>
  <circle cx="107.9" cy="143.9" r="0.2" fill="#99b7cf" class="color99b7cf svgShape"></circle>
  <circle cx="106.7" cy="141.5" r="0.2" fill="#99b7cf" class="color99b7cf svgShape"></circle>
  <circle cx="112.6" cy="139.5" r="0.2" fill="#99b7cf" class="color99b7cf svgShape"></circle>
  <circle cx="113.9" cy="142.4" r="0.2" fill="#99b7cf" class="color99b7cf svgShape"></circle>
  <circle cx="112.3" cy="144.2" r="0.2" fill="#99b7cf" class="color99b7cf svgShape"></circle>
  <circle cx="109.4" cy="142.6" r="0.2" fill="#99b7cf" class="color99b7cf svgShape"></circle>
</svg>

                <h1 class="text-gray-100 font-semibold text-lg md:text-2xl mx-0 md:mx-80">
                    Pesanan anda telah kami konfirmasi, Terima kasih telah membeli course
                </h1>
                <div class="bg-white rounded-lg shadow overflow-hidden">
                    <table class="w-full">
                        <tbody>
                            <tr>
                                <th class="px-4 py-3 bg-culti-green-4 text-left text-gray-100">Invoice</th>
                                <td class="px-4 py-3">{{ $invoice->invoice }}</td>
                            </tr>
                            <tr>
                                <th class="px-4 py-3 bg-culti-green-4 text-left text-gray-100">User ID</th>
                                <td class="px-4 py-3">{{ $invoice->user_id }}</td>
                            </tr>
                            <tr>
                                <th class="px-4 py-3 bg-culti-green-4 text-left text-gray-100">Name</th>
                                <td class="px-4 py-3">{{ $invoice->name }}</td>
                            </tr>
                            <tr>
                                <th class="px-4 py-3 bg-culti-green-4 text-left text-gray-100">Grand Total</th>
                                <td class="px-4 py-3">{{ $invoice->grand_total }}</td>
                            </tr>
                            <tr>
                                <th class="px-4 py-3 bg-culti-green-4 text-left text-gray-100">Status</th>
                                <td class="px-4 py-3">{{ $invoice->status }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <button
                    class="px-4 py-2 rounded-lg bg-white hover:bg-culti-green-4 text-culti-green-4 hover:text-white hover:scale-105 hover:duration-200 flex items-center gap-2 text-sm font-semibold border border-culti-green-4"
                    id="pay-button">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="icon icon-tabler icon-tabler-device-laptop w-5 h-5" width="24"
                        height="24" viewBox="0 0 24 24" stroke-width="1.4" stroke="currentColor"
                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <line x1="3" y1="19" x2="21" y2="19"></line>
                        <rect x="5" y="6" width="14" height="10"
                        rx="1"></rect>
                        </svg>
                    Cek Course
                </button>
            </div>
        </div>
    </div>
@endsection

@push('js')
<script type="text/javascript">
    var payButton = document.getElementById('pay-button');
    payButton.addEventListener('click', function() {
        window.location.href = "{{ route('member.mycourse') }}";
    });
</script>
@endpush
