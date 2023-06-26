@extends('layouts.frontend.app', ['title' => 'Checkout'])

@section('content')
    <div class="w-full p-6 md:p-12 bg-gray-100 h-full">
        <div class="container mx-auto px-4">
            <div class="flex flex-col items-center justify-center gap-y-4 md:gap-y-8 text-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <g fill="none" stroke="black" stroke-width="2">
                      <rect x="16" y="16" width="480" height="480" rx="16" />
                      <path d="M256 160 c-53.028 0-96 42.972-96 96 0 53.028 42.972 96 96 96 53.028 0 96-42.972 96-96 0-53.028-42.972-96-96-96" />
                      <path d="M288 257.099 c0 3.13-2.578 5.709-5.709 5.709 h-114.198 c-3.13 0-5.709-2.579-5.709-5.709 0-3.13 2.578-5.709 5.709-5.709 h114.198 c3.13 0 5.709 2.579 5.709 5.709" />
                      <path d="M192 272 c-16.079 0-32-15.921-32-32 0-16.079 15.921-32 32-32 16.079 0 32 15.921 32 32 0 16.079-15.921 32-32 32" />
                      <path d="M128 160 c-53.028 0-96 42.972-96 96 0 53.028 42.972 96 96 96 53.028 0 96-42.972 96-96 0-53.028-42.972-96-96-96" />
                      <path d="M160 257.099 c0 3.13-2.578 5.709-5.709 5.709 h-114.198 c-3.13 0-5.709-2.579-5.709-5.709 0-3.13 2.578-5.709 5.709-5.709 h114.198 c3.13 0 5.709 2.579 5.709 5.709" />
                      <path d="M416 272 c-16.079 0-32-15.921-32-32 0-16.079 15.921-32 32-32 16.079 0 32 15.921 32 32 0 16.079-15.921 32-32 32" />
                    </g>
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
