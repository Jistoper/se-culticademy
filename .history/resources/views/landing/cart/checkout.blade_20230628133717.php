@extends('layouts.frontend.app', ['title' => 'Checkout'])

@section('content')
    <div class="w-full p-6 md:p-12 bg-gray-100 h-full">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-center gap-y-4 md:gap-y-4 text-center">
                <div class="text-center justify-center items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 450 400" width="450" height="450">
                        <rect width="400" height="400" fill="#f3f4f6" class="colorfff svgShape"></rect>
                        <path fill="#f7fafc" d="M103.9,430.5c0,0-41.6-19.3-48.7-66.4c-7.1-47.1,11.9-64.7,17.9-76.7c6-12,8.8-26.7,1.8-51.8 c-7.1-25.1,4.2-92.5,75.7-107.7c71.5-15.1,178.3,0,178.3,0s77.1,7.3,84.4,65.1c7.3,57.8-7.1,92.4-7.1,92.4s38.9,29.1,48.6,58.1 s-17.9,81.4-58.1,91.3L103.9,430.5z" class="colorf7fafc svgShape"></path><rect width="79.1" height="152.6" x="111" y="102.7" fill="#ffffff" stroke="#d2e5ef" stroke-miterlimit="10" stroke-width=".664" transform="rotate(-16.69 150.561 179.009)" class="colorfff svgShape colorStroked2e5ef svgStroke"></rect><rect width="67.8" height="141.3" x="116.6" y="108.3" fill="#d2e5ef" transform="rotate(-16.69 150.561 179.009)" class="colord2e5ef svgShape"></rect><path fill="#ffffff" d="M103.2 119.4c.9 3-.8 6.1-3.8 7-3 .9-6.1-.8-7-3.8-.9-3 .8-6.1 3.8-7C99.1 114.8 102.3 116.4 103.2 119.4zM168.1 100c.9 3-.8 6.1-3.8 7-3 .9-6.1-.8-7-3.8-.9-3 .8-6.1 3.8-7C164.1 95.3 167.3 97 168.1 100zM143.8 254.8c.9 3-.8 6.1-3.8 7-3 .9-6.1-.8-7-3.8-.9-3 .8-6.1 3.8-7C139.7 250.1 142.9 251.8 143.8 254.8zM208.7 235.3c.9 3-.8 6.1-3.8 7-3 .9-6.1-.8-7-3.8-.9-3 .8-6.1 3.8-7C204.7 230.6 207.8 232.3 208.7 235.3z" class="colorfff svgShape"></path><path fill="#f7fafc" d="M167.4,172.8c2.5,8.4,1.7,16-12.2,20.2c-13.9,4.2-19.6-1.5-22.1-9.9c-2.5-8.4-0.9-16.3,13-20.4 C160,158.5,164.9,164.4,167.4,172.8z" class="colorf7fafc svgShape"></path>
                                <rect width="5.1" height="19.6" x="114.5" y="126.8" fill="#b3d2e0" transform="rotate(-16.69 117.052 136.585)" class="colorb3d2e0 svgShape"></rect><rect width="5.1" height="19.6" x="143.2" y="222.7" fill="#b3d2e0" transform="rotate(-16.69 145.819 232.505)" class="colorb3d2e0 svgShape"></rect><rect width="5.1" height="13.9" x="186.9" y="212.4" fill="#ffffff" transform="rotate(-16.69 189.5 219.4)" class="colorfff svgShape"></rect><path fill="#d2e5ef" d="M141.9,173l3.2,0.4c-0.6,1.7-0.7,4-0.1,5.9c0.7,2.2,1.7,2.9,2.7,2.6c3.1-0.9-1.9-9.8,4.2-11.6 c2.8-0.8,5.8,0.7,7.2,5.4c0.6,2.1,0.8,4.3,0.3,6.1l-3.2-0.3c0.4-1.8,0.4-3.5-0.1-4.9c-0.7-2.2-1.8-2.9-2.8-2.6
                                        c-3,0.9,1.9,9.8-4.1,11.6c-2.7,0.8-5.8-0.7-7.2-5.4C141.2,177.6,141.2,174.8,141.9,173z" class="colord2e5ef svgShape"></path><rect width="3" height="22.4" x="149.1" y="166.6" fill="#d2e5ef" transform="rotate(73.31 150.539 177.825)" class="colord2e5ef svgShape"></rect><g fill="#000000" class="color000 svgShape"><rect width="79.1" height="152.6" x="88.4" y="140.8" fill="#ffffff" stroke="#d2e5ef" stroke-miterlimit="10" stroke-width=".664" transform="rotate(-39.177 127.992 217.077)" class="colorfff svgShape colorStroked2e5ef svgStroke"></rect><rect width="67.8" height="141.3" x="94.1" y="146.4" fill="#d2e5ef" transform="rotate(-39.177 127.992 217.077)" class="colord2e5ef svgShape"></rect><path fill="#ffffff" d="M61.5 180.2c2 2.4 1.6 6-.8 8-2.4 2-6 1.6-8-.8-2-2.4-1.6-6 .8-8C55.9 177.4 59.5 177.7 61.5 180.2zM114.1 137.3c2 2.4 1.6 6-.8 8-2.4 2-6 1.6-8-.8-2-2.4-1.6-6 .8-8C108.5 134.5 112.1 134.9 114.1 137.3zM150.7 289.7c2 2.4 1.6 6-.8 8-2.4 2-6 1.6-8-.8-2-2.4-1.6-6 .8-8C145.2 286.9 148.8 287.3 150.7 289.7zM203.3 246.9c2 2.4 1.6 6-.8 8-2.4 2-6 1.6-8-.8-2-2.4-1.6-6 .8-8C197.8 244.1 201.3 244.4 203.3 246.9z" class="colorfff svgShape"></path><path fill="#f7fafc" d="M141.2,204.9c5.5,6.8,7.7,14.2-3.6,23.3c-11.3,9.2-18.7,6.1-24.2-0.7c-5.5-6.8-7.1-14.7,4.2-23.8
                                C128.9,194.5,135.7,198.1,141.2,204.9z" class="colorf7fafc svgShape"></path><rect width="5.1" height="19.6" x="78.3" y="180.9" fill="#b3d2e0" transform="rotate(-39.177 80.814 190.694)" class="colorb3d2e0 svgShape"></rect><rect width="5.1" height="19.6" x="141.5" y="258.5" fill="#b3d2e0" transform="rotate(-39.177 144.056 268.313)" class="colorb3d2e0 svgShape"></rect><rect width="5.1" height="13.9" x="176.9" y="232.6" fill="#ffffff" transform="rotate(-39.177 179.401 239.507)" class="colorfff svgShape"></rect><path fill="#d2e5ef" d="M117.7,214.8l3.2-0.8c0.1,1.8,0.9,3.9,2.2,5.5c1.5,1.8,2.7,2.1,3.5,1.4c2.5-2-5.5-8.3-0.6-12.4
                                        c2.3-1.8,5.6-1.5,8.7,2.2c1.4,1.7,2.4,3.7,2.6,5.6l-3.1,1c-0.3-1.8-1-3.4-2-4.5c-1.5-1.8-2.7-2-3.6-1.3
                                        c-2.4,2,5.5,8.3,0.7,12.3c-2.2,1.8-5.6,1.5-8.7-2.3C118.9,219.4,117.8,216.8,117.7,214.8z" class="colord2e5ef svgShape"></path><rect width="3" height="22.4" x="126.1" y="204.8" fill="#d2e5ef" transform="rotate(50.824 127.567 216.026)" class="colord2e5ef svgShape"></rect></g><g fill="#000000" class="color000 svgShape"><rect width="79.1" height="152.6" x="73.9" y="199.9" fill="#ffffff" stroke="#d2e5ef" stroke-miterlimit="10" stroke-width=".664" transform="rotate(-64.017 113.445 276.209)" class="colorfff svgShape colorStroked2e5ef svgStroke"></rect><rect width="67.8" height="141.3" x="79.5" y="205.6" fill="#d2e5ef" transform="rotate(-64.017 113.445 276.209)" class="colord2e5ef svgShape"></rect><path fill="#ffffff" d="M37.6 270.7c2.8 1.4 4 4.8 2.6 7.6-1.4 2.8-4.8 4-7.6 2.6-2.8-1.4-4-4.8-2.6-7.6C31.4 270.5 34.8 269.3 37.6 270.7zM67.3 209.7c2.8 1.4 4 4.8 2.6 7.6-1.4 2.8-4.8 4-7.6 2.6-2.8-1.4-4-4.8-2.6-7.6C61.1 209.5 64.5 208.3 67.3 209.7zM164.6 332.6c2.8 1.4 4 4.8 2.6 7.6-1.4 2.8-4.8 4-7.6 2.6-2.8-1.4-4-4.8-2.6-7.6C158.4 332.4 161.8 331.2 164.6 332.6zM194.3 271.6c2.8 1.4 4 4.8 2.6 7.6-1.4 2.8-4.8 4-7.6 2.6-2.8-1.4-4-4.8-2.6-7.6C188.1 271.4 191.5 270.2 194.3 271.6z" class="colorfff svgShape"></path><path fill="#f7fafc" d="M120.3,259.6c7.9,3.8,12.9,9.6,6.6,22.7c-6.4,13.1-14.4,13.4-22.3,9.5c-7.9-3.8-12.6-10.3-6.2-23.4
                                C104.8,255.3,112.4,255.8,120.3,259.6z" class="colorf7fafc svgShape"></path><rect width="5.1" height="19.6" x="57" y="262.3" fill="#b3d2e0" transform="rotate(-64.017 59.541 272.086)" class="colorb3d2e0 svgShape"></rect><rect width="5.1" height="19.6" x="147" y="306.1" fill="#b3d2e0" transform="rotate(-64.017 149.544 315.955)" class="colorb3d2e0 svgShape"></rect><rect width="5.1" height="13.9" x="167" y="268" fill="#ffffff" transform="rotate(-64.017 169.524 274.963)" class="colorfff svgShape"></rect><path fill="#d2e5ef" d="M103.2,278.5l2.5-2.1c0.8,1.6,2.4,3.2,4.3,4.1c2.1,1,3.3,0.7,3.8-0.2c1.4-2.9-8.5-5.3-5.7-11
                                        c1.3-2.6,4.4-3.8,8.8-1.6c1.9,0.9,3.7,2.4,4.7,4l-2.4,2.2c-1-1.5-2.3-2.6-3.7-3.3c-2.1-1-3.3-0.6-3.8,0.3
                                        c-1.4,2.8,8.5,5.2,5.8,10.9c-1.3,2.6-4.5,3.7-8.9,1.6C106.1,282.1,104,280.2,103.2,278.5z" class="colord2e5ef svgShape"></path><rect width="3" height="22.4" x="111.1" y="264.2" fill="#d2e5ef" transform="rotate(25.986 112.615 275.424)" class="colord2e5ef svgShape"></rect></g><g fill="#000000" class="color000 svgShape"><path fill="#dae7ed" d="M422.2,269.3c-6.1,6.1-6.1,16.1,0,22.2s16.1,6.1,22.2,0c6.1-6.1,6.1-16.1,0-22.2
                                    C438.3,263.1,428.4,263.1,422.2,269.3z" class="colordae7ed svgShape"></path><circle cx="433.3" cy="280.4" r="11.6" fill="#e6eff4" class="colore6eff4 svgShape"></circle><path fill="#dae7ed" d="M437,282c0-0.9-0.3-1.6-1-2c-0.3-0.2-0.6-0.4-0.9-0.5c-0.2-0.1-0.7-0.2-1.2-0.4c-0.6-0.2-1-0.3-1.3-0.5
                                    c-0.3-0.1-0.4-0.3-0.4-0.6c0-0.4,0.4-0.7,1.2-0.7c0.5,0,1.1,0.1,1.6,0.4c0.5,0.2,1,0.1,1.3-0.4c0.3-0.5,0.1-1.1-0.4-1.4
                                    c-0.5-0.3-1.1-0.4-1.6-0.5v-1.1c0-0.6-0.5-1-1-1c-0.6,0-1,0.5-1,1v1.2c-0.5,0.1-1,0.3-1.4,0.6c-0.7,0.5-1,1.2-1,2.1
                                    c0,0.9,0.3,1.5,1.1,1.9c0.3,0.2,0.7,0.4,0.9,0.5c0.3,0.1,0.7,0.3,1.2,0.4c0.5,0.2,0.9,0.3,1.2,0.5c0.3,0.2,0.4,0.4,0.4,0.6
                                    c0,0.2-0.1,0.4-0.3,0.5c-0.2,0.1-0.5,0.2-0.8,0.2c-0.8,0-1.6-0.2-2.3-0.6c-0.4-0.2-1-0.1-1.3,0.3l0,0c-0.3,0.5-0.2,1.1,0.3,1.4
                                    c0.4,0.2,0.7,0.4,1.1,0.5c0.3,0.1,0.7,0.2,1,0.3c0,0.1,0,0.1,0,0.2v1.4c0,0.6,0.5,1,1,1c0.6,0,1-0.5,1-1V285c0,0,0-0.1,0-0.1
                                    c0.7-0.1,1.2-0.4,1.7-0.8C436.7,283.6,437,282.9,437,282z" class="colordae7ed svgShape"></path><g fill="#000000" class="color000 svgShape"><path fill="#dae7ed" d="M211.4,53.1c-6.1,6.1-6.1,16.1,0,22.2c6.1,6.1,16.1,6.1,22.2,0c6.1-6.1,6.1-16.1,0-22.2
                                    C227.5,47,217.5,47,211.4,53.1z" class="colordae7ed svgShape"></path><circle cx="222.5" cy="64.2" r="11.6" fill="#e6eff4" class="colore6eff4 svgShape"></circle><path fill="#dae7ed" d="M226.2,65.8c0-0.9-0.3-1.6-1-2c-0.3-0.2-0.6-0.4-0.9-0.5c-0.2-0.1-0.7-0.2-1.2-0.4c-0.6-0.2-1-0.3-1.3-0.5
                                    c-0.3-0.1-0.4-0.3-0.4-0.6c0-0.4,0.4-0.7,1.2-0.7c0.5,0,1.1,0.1,1.6,0.4c0.5,0.2,1,0.1,1.3-0.4c0.3-0.5,0.1-1.1-0.4-1.4
                                    c-0.5-0.3-1.1-0.4-1.6-0.5v-1.1c0-0.6-0.5-1-1-1s-1,0.5-1,1v1.2c-0.5,0.1-1,0.3-1.4,0.6c-0.7,0.5-1,1.2-1,2.1
                                    c0,0.9,0.3,1.5,1.1,1.9c0.3,0.2,0.7,0.4,0.9,0.5c0.3,0.1,0.7,0.3,1.2,0.4c0.5,0.2,0.9,0.3,1.2,0.5c0.3,0.2,0.4,0.4,0.4,0.6
                                    c0,0.2-0.1,0.4-0.3,0.5c-0.2,0.1-0.5,0.2-0.8,0.2c-0.8,0-1.6-0.2-2.3-0.6c-0.4-0.2-1-0.1-1.3,0.3l0,0c-0.3,0.5-0.2,1.1,0.3,1.4
                                    c0.4,0.2,0.7,0.4,1.1,0.5c0.3,0.1,0.7,0.2,1,0.3c0,0.1,0,0.1,0,0.2v1.4c0,0.6,0.5,1,1,1s1-0.5,1-1v-1.4c0,0,0-0.1,0-0.1
                                    c0.7-0.1,1.2-0.4,1.7-0.8C225.8,67.5,226.2,66.7,226.2,65.8z" class="colordae7ed svgShape"></path></g><g fill="#000000" class="color000 svgShape"><circle cx="336.3" cy="94" r="20.6" fill="#dae7ed" class="colordae7ed svgShape"></circle><circle cx="336.3" cy="94" r="15.2" fill="#e6eff4" class="colore6eff4 svgShape"></circle><path fill="#dae7ed" d="M341.1,96.1c0-1.2-0.4-2-1.3-2.6c-0.5-0.3-0.8-0.5-1.2-0.6c-0.3-0.1-0.9-0.3-1.6-0.6
                                    c-0.8-0.2-1.3-0.5-1.6-0.6c-0.3-0.2-0.5-0.4-0.5-0.7c0-0.6,0.5-0.9,1.6-0.9c0.7,0,1.4,0.2,2.1,0.5c0.6,0.3,1.4,0.1,1.7-0.5
                                    c0.4-0.6,0.1-1.5-0.5-1.8c-0.7-0.3-1.4-0.6-2.1-0.7v-1.5c0-0.7-0.6-1.4-1.4-1.4s-1.4,0.6-1.4,1.4v1.6c-0.7,0.2-1.3,0.4-1.8,0.8
                                    c-0.9,0.7-1.4,1.6-1.4,2.7c0,1.1,0.5,2,1.4,2.5c0.5,0.3,0.9,0.5,1.2,0.7c0.4,0.2,0.9,0.3,1.5,0.5c0.7,0.2,1.2,0.4,1.5,0.7
                                    c0.4,0.2,0.5,0.5,0.5,0.8c0,0.3-0.1,0.5-0.4,0.7c-0.3,0.2-0.6,0.3-1,0.3c-1.1,0-2.1-0.3-3.1-0.8c-0.6-0.3-1.3-0.2-1.7,0.4l0,0
                                    c-0.4,0.6-0.3,1.5,0.4,1.9c0.5,0.3,1,0.5,1.5,0.7c0.4,0.1,0.9,0.3,1.3,0.3c0,0.1,0,0.1,0,0.2v1.8c0,0.7,0.6,1.4,1.4,1.4
                                    s1.4-0.6,1.4-1.4v-1.8c0-0.1,0-0.1,0-0.2c0.9-0.1,1.6-0.5,2.2-1C340.6,98.2,341.1,97.2,341.1,96.1z" class="colordae7ed svgShape"></path></g></g><g fill="#000000" class="color000 svgShape"><path fill="#a3c3ce" d="M328.9,431.5H147.7c-2.2,0-4-1.8-4-4V108.2c0-2.2,1.8-4,4-4h181.3c2.2,0,4,1.8,4,4v319.4
                            C332.9,429.8,331.1,431.5,328.9,431.5z" class="colora3c3ce svgShape"></path><path fill="#b6d1dd" d="M332.9,426.3V109.4c0-2.9-2.3-5.2-5.2-5.2H165.8c-2.9,0-5.2,2.3-5.2,5.2v316.9c0,2.9,2.3,5.2,5.2,5.2h161.9
                            C330.6,431.5,332.9,429.2,332.9,426.3z" class="colorb6d1dd svgShape"></path><path fill="#d2e5ef" d="M324.3,425.5H168.7c-2.5,0-4.5-2-4.5-4.5V114.1c0-2.5,2-4.5,4.5-4.5h155.6c2.5,0,4.5,2,4.5,4.5v306.8
                            C328.9,423.4,326.8,425.5,324.3,425.5z" class="colord2e5ef svgShape"></path><path fill="#82b4bf" d="M151.8 185.4L151.8 185.4c-2.4 0-4.3-1.9-4.3-4.3v-42.9c0-2.4 1.9-4.3 4.3-4.3l0 0c2.4 0 4.3 1.9 4.3 4.3v42.9C156.2 183.5 154.2 185.4 151.8 185.4zM151.8 220.1L151.8 220.1c-2.4 0-4.3-1.9-4.3-4.3v-21.9c0-2.4 1.9-4.3 4.3-4.3l0 0c2.4 0 4.3 1.9 4.3 4.3v21.9C156.2 218.2 154.2 220.1 151.8 220.1z" class="color82b4bf svgShape"></path><path fill="#b6d1dd" d="M150.5 189.8c-1.8.5-3.1 2.2-3.1 4.1v21.9c0 1.9 1.3 3.6 3.1 4.1 1.8-.5 3.1-2.2 3.1-4.1v-21.9C153.6 192 152.3 190.3 150.5 189.8zM150.5 134.1c-1.8.5-3.1 2.2-3.1 4.1v42.9c0 1.9 1.3 3.6 3.1 4.1 1.8-.5 3.1-2.2 3.1-4.1v-42.9C153.6 136.2 152.3 134.6 150.5 134.1z" class="colorb6d1dd svgShape"></path><rect width="8.7" height="1.4" x="147.5" y="158.9" fill="#82b4bf" class="color82b4bf svgShape"></rect><path fill="#e4eff4" d="M322.9,109.6H170.2c-3.3,0-6,2.7-6,6V150h164.7v-34.5C328.9,112.3,326.2,109.6,322.9,109.6z" class="colore4eff4 svgShape"></path><circle cx="151.8" cy="228.4" r="2.1" fill="#96c4cc" class="color96c4cc svgShape"></circle><path fill="#b6d1dd" d="M215.1,104.2v4.8c0,5.8,4.7,10.5,10.5,10.5H265c5.8,0,10.5-4.7,10.5-10.5v-4.8H215.1z" class="colorb6d1dd svgShape"></path><path fill="#6d9faf" d="M304.3 137c0-1.3-1.1-2.4-2.4-2.4-1.3 0-2.4 1.1-2.4 2.4s1.1 2.4 2.4 2.4C303.2 139.5 304.3 138.4 304.3 137zM312.2 137c0-1.3-1.1-2.4-2.4-2.4s-2.4 1.1-2.4 2.4 1.1 2.4 2.4 2.4S312.2 138.4 312.2 137zM320.3 137c0-1.3-1.1-2.4-2.4-2.4s-2.4 1.1-2.4 2.4 1.1 2.4 2.4 2.4S320.3 138.4 320.3 137z" class="color6d9faf svgShape"></path><text fill="#6d9faf" font-family="Montserrat-ExtraBold" font-size="9.887" transform="translate(222.504 140.214)" svgjs:data="{&quot;leading&quot;:&quot;1.3&quot;}">Payments</text><path fill="#6d9faf" d="M177,132.9l-0.5-0.6c-0.4-0.5-1.1-0.5-1.6-0.1l-4.6,4.6c-0.4,0.4-0.4,1.1,0,1.5l4.6,4.6
                            c0.4,0.4,1.2,0.4,1.6-0.1l0.5-0.6c0.3-0.4,0.3-1,0-1.4l-2.4-2.6c-0.4-0.4-0.4-1,0-1.4l2.4-2.6C177.3,133.9,177.3,133.3,177,132.9
                            z" class="color6d9faf svgShape"></path><rect width="130.1" height="53.5" x="177.2" y="167" fill="#f3f6f9" class="colorf3f6f9 svgShape"></rect><path fill="#f3f6f9" d="M311.7,301.9H181.9c-2.6,0-4.7-2.1-4.7-4.7v-60.6c0-2.6,2.1-4.7,4.7-4.7h129.8c2.6,0,4.7,2.1,4.7,4.7v60.6
                            C316.4,299.8,314.3,301.9,311.7,301.9z" class="colorf3f6f9 svgShape"></path><rect width="139.1" height="64.8" x="177.2" y="311.3" fill="#f3f6f9" class="colorf3f6f9 svgShape"></rect><rect width="130.1" height="13.2" x="177.2" y="167" fill="#f3f6f9" class="colorf3f6f9 svgShape"></rect><path fill="#e05353" d="M296.3,290.5h-97.1c-3.3,0-5.9-2.6-5.9-5.9v-94.9c0-3.3,2.6-5.9,5.9-5.9h97.1c3.3,0,5.9,2.6,5.9,5.9v94.9
                            C302.2,287.9,299.5,290.5,296.3,290.5z" class="colore05353 svgShape"></path><path fill="#d2e5ef" d="M307.1 317.4h-121c-.8 0-1.4.6-1.4 1.4v6.2c0 .8.6 1.4 1.4 1.4h121c.8 0 1.4-.6 1.4-1.4v-6.2C308.5 318 307.9 317.4 307.1 317.4zM307.1 332.7h-121c-.8 0-1.4.6-1.4 1.4v6.2c0 .8.6 1.4 1.4 1.4h121c.8 0 1.4-.6 1.4-1.4v-6.2C308.5 333.4 307.9 332.7 307.1 332.7z" class="colord2e5ef svgShape"></path><path fill="#e05353" d="M294.2,382.2h-95.4c-3,0-5.5-2.5-5.5-5.5v-17.6c0-3,2.5-5.5,5.5-5.5h95.4c3,0,5.5,2.5,5.5,5.5v17.6
                            C299.7,379.8,297.3,382.2,294.2,382.2z" class="colore05353 svgShape"></path><path fill="#d2e5ef" d="M164.2,389.8v29.7c0,3.3,2.7,6,6,6h152.7c3.3,0,6-2.7,6-6v-29.7H164.2z" class="colord2e5ef svgShape"></path><text fill="#fff" font-family="Montserrat-ExtraBold" font-size="17.262" transform="translate(209.807 277.915)" svgjs:data="{&quot;leading&quot;:&quot;1.3&quot;}">Success!</text><circle cx="248.6" cy="224.8" r="29.7" fill="#ffffff" transform="rotate(-68.96 248.598 224.854)" class="colorfff svgShape"></circle><circle cx="248.6" cy="224.8" r="26.6" fill="#e05353" transform="rotate(-67.5 248.575 224.84)" class="colore05353 svgShape"></circle><path fill="#ffffff" d="M237.8,235.3l2-4.5c2.2,1.6,5.5,2.7,8.6,2.7c3.6,0,5-1.2,5-2.8c0-4.9-15.1-1.5-15.1-11.2
                                    c0-4.4,3.6-8.1,10.9-8.1c3.3,0,6.6,0.8,9,2.3l-1.9,4.6c-2.4-1.4-4.9-2-7.2-2c-3.6,0-4.9,1.3-4.9,3c0,4.8,15.1,1.5,15.1,11
                                    c0,4.3-3.6,8.1-11,8.1C244.2,238.3,240.1,237,237.8,235.3z" class="colorfff svgShape"></path><rect width="4.5" height="34" x="246.3" y="207.8" fill="#ffffff" class="colorfff svgShape"></rect><polyline fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2.627" points="234.2 365.5 244.1 373.6 257.5 360.5"></polyline></g><line x1="50.6" x2="467.2" y1="430.8" y2="430.8" fill="none" stroke="#adc0c9" stroke-miterlimit="10" stroke-width="1.242" class="colorStrokeadc0c9 svgStroke"></line><g fill="#000000" class="color000 svgShape"><path fill="#7a164d" d="M330.3,409.6l-0.7,7.4c0,0-12.8,4.6-14.2,7.7c-1.4,3.1,2.2,3.8,12.2,4.7c8.5,0.8,25.4,1.5,30,1.7
                                c0.6,0,1.2-0.5,1.2-1.1l1.2-18.2L330.3,409.6z" class="color7a164d svgShape"></path><path fill="none" stroke="#a32671" stroke-linecap="round" stroke-miterlimit="10" stroke-width=".985" d="M330.7 414c0 0 10.9 2.1 27.9 1.8M323.5 420c0 0 1.9 1 1.6 5.6M352.2 427.7c0 0 1.9-4.7 5.9-5.9M317.1 424.8c0 0 5.2 3 40.2 3.3" class="colorStrokea32671 svgStroke"></path><path fill="#7a164d" d="M437.5,401.9l4.7,5.7c0,0-5.8,12.2-4.7,15.4c1.1,3.2,4.3,1.1,12-5.2c6.7-5.4,19.2-16.8,22.5-19.8
                                c0.5-0.4,0.5-1.2,0.1-1.6l-12-13.8L437.5,401.9z" class="color7a164d svgShape"></path><path fill="none" stroke="#a32671" stroke-linecap="round" stroke-miterlimit="10" stroke-width=".985" d="M440.9 404.8c0 0 9.2-6.1 21.1-18.3M440 414.2c0 0 2.1-.6 5.1 2.8M465.9 399.5c0 0-2-4.7.1-8.4M438.8 422c0 0 5.8-1.5 30.9-25.9" class="colorStrokea32671 svgStroke"></path><path fill="#5987cc" d="M346.5,237.8v12.3c0,0-15.6,87-19.7,151c0,0-3.5,2.6-3.7,5.8c-0.2,3.2,4.7,4.4,4.7,4.4s24.7,2.3,37,2.2
                            c0,0,5.5-2.8,0.7-8.5c0,0,7-80.7,11.7-102.9l10.6,38.7c0.7,2.4,1.8,4.6,3.3,6.6l37.7,48.8c0,0-2.8,9.4,5,9.4l16.4-11.3l14-12.8
                            c0,0,1.9-9-6.8-7.7l-30.2-41.9c-1-1.4-1.8-2.9-2.2-4.6l-17.7-59.9c0,0,5.2-6.6,1.2-29.3l-46.8-12.3L346.5,237.8z" class="color5987cc svgShape"></path><path fill="none" stroke="#396099" stroke-linecap="round" stroke-miterlimit="10" stroke-width=".985" d="M360.4 244.1c0 0-.6 21.1 2.7 27.7l7.2.9M379.3 309.4c0 0-7.1-27.3-9-40.7l-1.3-24.6" class="colorStroke396099 svgStroke"></path><polygon fill="#f0f1f2" points="351.3 237.8 351.3 245.1 391.8 246.4 391.8 236.4" class="colorf0f1f2 svgShape"></polygon><path fill="#f0f1f2" d="M408.5,237.8l-6.9-1.8l-4.1,0.4v9.6h12.1C409.4,243.5,409,240.8,408.5,237.8z" class="colorf0f1f2 svgShape"></path><path fill="#7a164d" d="M294.3,160.7l-1.3-10.4c-0.1-0.7,0.4-1.3,1.1-1.3h23.9c0.6,0,1.2,0.5,1.2,1.1l2.6,32.7l-26,3.4L294.3,160.7
                            z" class="color7a164d svgShape"></path><path fill="#7a164d" d="M315.9,149l3.8,33.4h2.2l-2.6-32.2c-0.1-0.6-0.6-1.1-1.2-1.1H315.9z" opacity=".44" class="color7a164d svgShape"></path><path fill="#f9c1c0" d="M309.3,182.8H297v-3.4l3.1-3.8c0.2-0.2,0.3-0.5,0.3-0.7c0.1-0.8,0-2.5-1.4-3.3l2-2.3
                            c0.2-0.2,0.3-0.5,0.3-0.8c0-0.9-0.3-2.7-2.5-2.7l0.8-0.7c0,0,2.5-4.7-1.5-5.1l1.7-2.1c0,0,1.1-4-2.2-3.4l-6.7,7.2
                            c0,0-1.2,14.4,2.2,20.7l0.5,4.1c0,0-4,15.4-7.7,41.7c0,0-2,12.3,9.9,13.9c0,0,21.1-4.4,31.7-12.4v-48.1L309.3,182.8z" class="colorf9c1c0 svgShape"></path><path fill="#f9c1c0" d="M336.9,186.6l-2.5-5.2c0,0,0.9-7,0.7-8.5c-0.2-1.6-7.2-6.6-9-7.3c-1.8-0.7-5.6-0.5-5.6-0.5l0.2,4.8
                            c0,0-6.9-4.1-8.9-6.3c0,0-2.8-0.2-3.1,2.9c0,0-2.7-0.4-3.8,2.7l0.9,1.7c0,0-2,0.1-2.4,2.7c0,0,1,2.3,1.4,2.7c0,0-1.6,0.2-1.4,2
                            c0.2,1.8,6.7,10.3,9.8,11.6l1.8,2.9l12.3,31.7l7.1,4.7l5.3,10.3c0.8,1.5,2.3,2.5,4.1,2.6c3.2,0.2,8.4-0.2,13.6-4l43.5-8.8v-46
                            L336.9,186.6z" class="colorf9c1c0 svgShape"></path><path fill="#ff90c8" d="M359.5,177.2l-22.6,9.4l12.8,21.7l16.4-10.2c0,0,0.5,4.6,5,5c0,0-2,6.3,5.2,9.1c0,0-0.5,6.1,7.1,6.1
                            c0,0-0.8,2.2,0,4.6l-26,14.8h51.1c0,0,2.4-1.2,2.8-3.5c0.5-2.4-2.6-4.4-2.6-4.4l1.7-22.7c0,0,6.7-6.4,8.3-13.2
                            c1.6-6.8-5.4-13.1-9.5-14.3l-21.9-4.6L359.5,177.2z" class="colorff90c8 svgShape"></path><line x1="347.4" x2="345.2" y1="189.1" y2="198.9" fill="none" stroke="#ce4590" stroke-linecap="round" stroke-miterlimit="10" stroke-width=".985" class="colorStrokece4590 svgStroke"></line><path fill="#f9c1c0" d="M352.9,132.7c0,0-7.2,8.7-5.1,21c2,11.5,13.1,15.4,13.1,15.4l2.1,6.5l-3.6,1.5c0,0,1.6,10.5,8.1,13
                            l19.8-15.1l-7.2-1.2l-1.7-9.8l1.9-1.9c0,0,8.3-1.2,11.1-7.6c3-6.8-2.9-9.1-2.9-9.1l-13.1-17L352.9,132.7z" class="colorf9c1c0 svgShape"></path><path fill="#f4807d" d="M387.2 149.5c0 0 2.2.1 2.2 2.5 0 2.4-3.4 5-5.1 4.5C382.6 156 384 151 387.2 149.5zM360.9 169.2c7.6 1.4 12.6-1.7 12.6-1.7-3.3 5.2-11.3 5.7-11.3 5.7L360.9 169.2z" opacity=".33" class="colorf4807d svgShape"></path><path fill="#7a164d" d="M385,131.1c0,0,1.8-4.3,7.5-7.3c5.7-3,10.8-1.1,10.2,1.7c0,0,2.6,0.1,3.4,2.8c0.8,2.7-1.2,4.8-1.2,4.8
                            s2.2,1,2.4,3.3c0.2,2.3-1.8,3.3-1.8,3.3s1.4,0,1.4,1.3c0,1.3-2.8,4.7-6.6,5.4c-3.8,0.7-9.4-0.6-12.3-4.8
                            C385.1,137.5,385,131.1,385,131.1z" class="color7a164d svgShape"></path><path fill="#7a164d" d="M385,131.1c0,0,1.8-4.3,7.5-7.3c5.7-3,10.8-1.1,10.2,1.7c0,0,2.6,0.1,3.4,2.8c0.8,2.7-1.2,4.8-1.2,4.8
                            s2.2,1,2.4,3.3c0.2,2.3-1.8,3.3-1.8,3.3s1.4,0,1.4,1.3c0,1.3-2.8,4.7-6.6,5.4c-3.8,0.7-9.4-0.6-12.3-4.8
                            C385.1,137.5,385,131.1,385,131.1z" opacity=".44" class="color7a164d svgShape"></path><path fill="#ff90c8" d="M385.3,130.4c1.6,0.6,5.4,2.3,6.1,5.9c0.1,0.4-0.1,0.9-0.3,1.2c-0.9,1-2.7,3-3.7,3.4
                            c-1,0.5-2.3-7.5-2.7-10.1C384.6,130.6,384.9,130.3,385.3,130.4z" class="colorff90c8 svgShape"></path><path fill="#7a164d" d="M351.2 134.4c1.3.2 4.3.5 6.3-1.5 0 0 1.6 1.3 4.1-.9 0 0 1.3 3.2 5.5 0 0 0 .5 2.2 5.6 1 0 0-.5 3.9 4.6 4.9 0 0-3 4.6.4 6.1 0 0-1.2 5.5 3.1 6.9l4.4-5.7c0 0 1.7-.4 3.5.4 0 0 2.2-18.6-13.1-21.9-19.7-4.2-24 7.2-24.7 10C350.7 134 350.9 134.3 351.2 134.4zM351.4 142.4c0 0 1.8-2.6 4.7-2.7.4 0 .8-.4.7-.8-.1-.7-.6-1.6-2-2 0 0-3.1.1-4.4 4.4C350.4 141.2 350.2 142.1 351.4 142.4z" class="color7a164d svgShape"></path><path fill="#7a164d" d="M363 138.8c0-.9.3-2 1.3-2.5 0 0 5.8-.2 7.6 4.2 0 0-.3 1.2-1.5 1.2 0 0-3.1-2.1-6.4-1.9C363.4 139.8 363 139.3 363 138.8zM356.4 147.4c0 1.6-.5 2.8-1 2.8-.6 0-1-1.3-1-2.8s.5-2.8 1-2.8C355.9 144.6 356.4 145.8 356.4 147.4zM369.1 147.8c0 1.6-.5 2.8-1 2.8-.6 0-1-1.3-1-2.8 0-1.6.5-2.8 1-2.8C368.7 144.9 369.1 146.2 369.1 147.8z" class="color7a164d svgShape"></path><path fill="none" stroke="#e26060" stroke-linecap="round" stroke-miterlimit="10" stroke-width=".985" d="M360.2 146.5v3.7c0 0-2.1.9-2.1 2.5 0 1.7 2.9 2 2.9 2M388 149.3c0 0-2.8.1-4.6 5.3M388 152.2c0 0-1.8-1.1-3.5 0" class="colorStrokee26060 svgStroke"></path><path fill="none" stroke="#e26060" stroke-linecap="round" stroke-miterlimit="10" stroke-width=".657" d="M360.9,169.2c0,0,8.1,1.7,13.3-2.1" class="colorStrokee26060 svgStroke"></path><path fill="#e25555" d="M360.9,160.6l11-6.7c0,0,3.2,6.4-1.5,9C364.3,166.3,360.9,160.6,360.9,160.6z" class="colore25555 svgShape"></path><path fill="#f76b6b" d="M366.1,164c1.2,0.1,2.7-0.2,4.4-1.1c2.7-1.5,2.8-4.3,2.3-6.3C368.1,156.7,366.6,161.7,366.1,164z" class="colorf76b6b svgShape"></path><path fill="#ffffff" d="M372.8,156.5c-0.3-1.5-0.9-2.7-0.9-2.7l-11,6.7c0,0,0.6,1.1,1.9,2L372.8,156.5z" class="colorfff svgShape"></path><path fill="#ff90c8" d="M315,192.6l19.4,36.4c0,0-3.1,4.1-6.7,2.8c-3.5-1.3-2.1-8.9-2.1-8.9s-5.2-0.4-3.7-7.4c0,0-6-1.4-3.8-8.3
                            c0,0-2,0.6-3.2-2.6V192.6z" class="colorff90c8 svgShape"></path><path fill="none" stroke="#e26060" stroke-linecap="round" stroke-miterlimit="10" stroke-width=".657" d="M308.8 166.3c0 0 6.9 7.2 12.6 8.7M305.8 170.7c0 0 5.5 6.8 11.8 9.2M304.9 176c0 0 5.3 6.2 8.8 6.8M311.9 163.5c0 0 7.5 6.7 12.8 8.2" class="colorStrokee26060 svgStroke"></path><line x1="320.8" x2="320.8" y1="169.8" y2="165.7" fill="none" stroke="#e26060" stroke-linecap="round" stroke-miterlimit="10" stroke-width=".657" class="colorStrokee26060 svgStroke"></line><line x1="352.2" x2="336.3" y1="212.3" y2="185.6" fill="none" stroke="#e26060" stroke-linecap="round" stroke-miterlimit="10" stroke-width=".657" class="colorStrokee26060 svgStroke"></line><path fill="none" stroke="#e26060" stroke-linecap="round" stroke-miterlimit="10" stroke-width=".657" d="M303.8,179c0,0,5.7,9.2,9.5,10.7l18.1,33.6" class="colorStrokee26060 svgStroke"></path><line x1="313.7" x2="315.5" y1="225.8" y2="193.9" fill="none" stroke="#e26060" stroke-linecap="round" stroke-miterlimit="10" stroke-width=".657" class="colorStrokee26060 svgStroke"></line><polyline fill="none" stroke="#e26060" stroke-linecap="round" stroke-miterlimit="10" stroke-width=".657" points="293.8 176.3 299 171.6 301 169.3"></polyline><line x1="295" x2="300.1" y1="181.8" y2="175.6" fill="none" stroke="#e26060" stroke-linecap="round" stroke-miterlimit="10" stroke-width=".657" class="colorStrokee26060 svgStroke"></line><line x1="292.9" x2="298.8" y1="170.7" y2="165.7" fill="none" stroke="#e26060" stroke-linecap="round" stroke-miterlimit="10" stroke-width=".657" class="colorStrokee26060 svgStroke"></line><line x1="292.4" x2="299.5" y1="165.7" y2="158.1" fill="none" stroke="#e26060" stroke-linecap="round" stroke-miterlimit="10" stroke-width=".657" class="colorStrokee26060 svgStroke"></line><path fill="#7a164d" d="M313.3,154.7c0-1.3-1-2.3-2.3-2.3c-1.3,0-2.3,1-2.3,2.3c0,1.3,1,2.3,2.3,2.3
                            C312.3,157,313.3,156,313.3,154.7z" opacity=".44" class="color7a164d svgShape"></path><path fill="none" stroke="#ce4590" stroke-linecap="round" stroke-miterlimit="10" stroke-width=".985" d="M414.3,202.7c0,0-10.1,12.9-26.5,25.4c0,0-5.5-1.3-4.4-9.6c0,0-6.1,0.9-7.1-6.1c0,0-6.5-1.7-5.2-9.1
                            c0,0-5.1-1.1-5-5l28.9-17.7" class="colorStrokece4590 svgStroke"></path><path fill="none" stroke="#396099" stroke-linecap="round" stroke-miterlimit="10" stroke-width=".985" d="M365.6 404.8c1.9-38.1 11.7-102.9 11.7-102.9M343.1 404.8c0 0 18.9 1.1 22.5 0" class="colorStroke396099 svgStroke"></path><line x1="440.6" x2="457.5" y1="387.5" y2="373.5" fill="none" stroke="#396099" stroke-linecap="round" stroke-miterlimit="10" stroke-width=".985" class="colorStroke396099 svgStroke"></line></g><g fill="#000000" class="color000 svgShape"><path fill="#e05353" d="M87.5 355.6c0 0-.4-16 3.8-16 4.1 0-1.4 24.4-1.4 24.4L87.5 355.6zM90.8 367.6c0 0-8.7-14.8-13.7-11.7-5 3.1 16.2 22 16.2 22L90.8 367.6zM83.6 344.1c0 0-8.6-12.7-13.2-8.1-4.6 4.5 10.2 12.1 14.3 11.1L83.6 344.1zM80 335c0 0-2.6-14.8 1.4-14.9 4-.1 2.4 13-.3 17.5L80 335zM72.1 319.3c0 0 5.7-12.2 2.2-16C71.3 300.2 68.5 314.3 72.1 319.3zM75.4 325.3c0 0-9.4-9.9-13-5.2C58.9 324.8 69 327.8 75.4 325.3zM64.3 308.6c0 0-10.3-3.2-10.2 2.6.1 5.8 12.4 0 12.4 0L64.3 308.6zM64.3 308.6c0 0 3.1-10.5.7-14C61.9 290 58.2 302.9 64.3 308.6z" class="colore05353 svgShape"></path><path fill="none" stroke="#a52828" stroke-miterlimit="10" stroke-width=".807" d="M60,304.6c0,0,23.4,15.1,36.4,89.2" class="colorStrokea52828 svgStroke"></path><path fill="#e05353" d="M61.3,305.6c0,0-4.1-10.3-9.7-8.9C46,298.1,55.7,308,61.3,305.6z" class="colore05353 svgShape"></path><g fill="#000000" class="color000 svgShape"><path fill="#e05353" d="M102.6 346.9c0 0 .4-16-3.8-16-4.1 0 1.4 24.4 1.4 24.4L102.6 346.9zM99.2 359c0 0 8.7-14.8 13.7-11.7 5 3.1-16.2 22-16.2 22L99.2 359zM106.4 335.4c0 0 8.6-12.7 13.2-8.1 4.6 4.5-10.2 12.1-14.3 11.1L106.4 335.4zM110 326.3c0 0 2.6-14.8-1.4-14.9-4-.1-2.4 13 .3 17.5L110 326.3zM117.9 310.6c0 0-5.7-12.2-2.2-16C118.8 291.5 121.5 305.6 117.9 310.6zM114.6 316.6c0 0 9.4-9.9 13-5.2C131.2 316.1 121 319.1 114.6 316.6zM125.7 299.9c0 0 10.3-3.2 10.2 2.6-.1 5.8-12.4 0-12.4 0L125.7 299.9zM125.7 299.9c0 0-3.1-10.5-.7-14C128.2 281.3 131.8 294.3 125.7 299.9z" class="colore05353 svgShape"></path><path fill="none" stroke="#a52828" stroke-miterlimit="10" stroke-width=".807" d="M130,295.9c0,0-23.4,15.1-36.4,89.2" class="colorStrokea52828 svgStroke"></path><path fill="#e05353" d="M128.7,296.9c0,0,4.1-10.3,9.7-8.9C144,289.4,134.3,299.3,128.7,296.9z" class="colore05353 svgShape"></path></g><polygon fill="#7a164d" points="82.1 431.1 110.1 431.1 118.4 389.9 74 389.9" class="color7a164d svgShape"></polygon><polygon fill="#964073" points="74.2 392.3 71.4 389.9 71.4 384.1 121.4 384.1 121.4 389.9 118.4 392.3" class="color964073 svgShape"></polygon></g><g fill="#000000" class="color000 svgShape"><circle cx="109.9" cy="115.1" r="24.8" fill="#e05353" class="colore05353 svgShape"></circle><polygon fill="#ffffff" points="121 126.5 98.9 126.5 103.5 103.7 116.3 103.7" class="colorfff svgShape"></polygon><path fill="none" stroke="#e05353" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.008" d="M113.7,106.4c0,2.1-1.7,3.7-3.7,3.7s-3.7-1.7-3.7-3.7" class="colorStrokee05353 svgStroke"></path></g>
                        </svg>
                    <h1 class="text-gray-700 font-semibold text-lg md:text-2xl mx-0 md:mx-80">
                        Pesanan anda telah kami konfirmasi, Terima kasih telah membeli course
                    </h1>
                </div>
                <div class="place-items-center">
                    <div class="bg-white rounded-lg shadow overflow-hidden mb-3">
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
                    <button class="px-4 py-2 rounded-lg bg-white hover:bg-culti-green-4 text-culti-green-4 hover:text-white hover:scale-105 hover:duration-200 flex items-center text-sm font-semibold border border-culti-green-4 space-x-1"
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
                        <p>
                            Cek Course
                        </p>
                    </button>
                </div>
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
