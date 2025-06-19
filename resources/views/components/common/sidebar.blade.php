<div :class="{ 'dark text-white-dark': $store.app.semidark }">
    <nav x-data="sidebar"
        class="sidebar fixed min-h-screen h-full top-0 bottom-0 w-[260px] shadow-[5px_0_25px_0_rgba(94,92,154,0.1)] z-50 transition-all duration-300">
        <div class="bg-white dark:bg-[#0e1726] h-full">
            <div class="flex justify-between items-center px-4 py-3">
                <a href="/" class="main-logo flex items-center shrink-0">
                    <img class="w-8 ml-[5px] flex-none" src="/assets/images/logo.svg" alt="image" />
                    <span
                        class="text-2xl ltr:ml-1.5 rtl:mr-1.5  font-semibold  align-middle lg:inline dark:text-white-light">Inaspro</span>
                </a>
                <a href="javascript:;"
                    class="collapse-icon w-8 h-8 rounded-full flex items-center hover:bg-gray-500/10 dark:hover:bg-dark-light/10 dark:text-white-light transition duration-300 rtl:rotate-180"
                    @click="$store.app.toggleSidebar()">
                    <svg class="w-5 h-5 m-auto" width="20" height="20" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M13 19L7 12L13 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path opacity="0.5" d="M16.9998 19L10.9998 12L16.9998 5" stroke="currentColor"
                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </a>
            </div>
            <ul class="perfect-scrollbar relative font-semibold space-y-0.5 h-[calc(100vh-80px)] overflow-y-auto overflow-x-hidden  p-4 py-0"
                x-data="{ activeDropdown: null }">
                <li class="nav-item">
                    <a href="/">
                        <div class="flex items-center">

                            <svg class="group-hover:!text-primary shrink-0" width="20" height="20"
                                viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.5"
                                    d="M2 12.2039C2 9.91549 2 8.77128 2.5192 7.82274C3.0384 6.87421 3.98695 6.28551 5.88403 5.10813L7.88403 3.86687C9.88939 2.62229 10.8921 2 12 2C13.1079 2 14.1106 2.62229 16.116 3.86687L18.116 5.10812C20.0131 6.28551 20.9616 6.87421 21.4808 7.82274C22 8.77128 22 9.91549 22 12.2039V13.725C22 17.6258 22 19.5763 20.8284 20.7881C19.6569 22 17.7712 22 14 22H10C6.22876 22 4.34315 22 3.17157 20.7881C2 19.5763 2 17.6258 2 13.725V12.2039Z"
                                    fill="currentColor" />
                                <path
                                    d="M9 17.25C8.58579 17.25 8.25 17.5858 8.25 18C8.25 18.4142 8.58579 18.75 9 18.75H15C15.4142 18.75 15.75 18.4142 15.75 18C15.75 17.5858 15.4142 17.25 15 17.25H9Z"
                                    fill="currentColor" />
                            </svg>

                            <span
                                class="ltr:pl-3 rtl:pr-3 text-black dark:text-[#506690] dark:group-hover:text-white-dark">Dashboard</span>
                        </div>
                    </a>
                </li>

                <h2
                    class="py-3 px-7 flex items-center uppercase font-extrabold bg-white-light/30 dark:bg-dark dark:bg-opacity-[0.08] -mx-4 mb-1">

                    <svg class="w-4 h-5 flex-none hidden" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"
                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg>
                    <span>External</span>
                </h2>

                <li class="nav-item">
                    <a href="/surat-masuk" class="group">
                        <div class="flex items-center">

                            <svg class="group-hover:!text-primary shrink-0" width="20" height="20"
                                viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M24 5C24 6.65685 22.6569 8 21 8C19.3431 8 18 6.65685 18 5C18 3.34315 19.3431 2 21 2C22.6569 2 24 3.34315 24 5Z"
                                    fill="currentColor" />
                                <path
                                    d="M17.2339 7.46394L15.6973 8.74444C14.671 9.59966 13.9585 10.1915 13.357 10.5784C12.7747 10.9529 12.3798 11.0786 12.0002 11.0786C11.6206 11.0786 11.2258 10.9529 10.6435 10.5784C10.0419 10.1915 9.32941 9.59966 8.30315 8.74444L5.92837 6.76546C5.57834 6.47377 5.05812 6.52106 4.76643 6.87109C4.47474 7.22112 4.52204 7.74133 4.87206 8.03302L7.28821 10.0465C8.2632 10.859 9.05344 11.5176 9.75091 11.9661C10.4775 12.4334 11.185 12.7286 12.0002 12.7286C12.8154 12.7286 13.523 12.4334 14.2495 11.9661C14.947 11.5176 15.7372 10.859 16.7122 10.0465L18.3785 8.65795C17.9274 8.33414 17.5388 7.92898 17.2339 7.46394Z"
                                    fill="currentColor" />
                                <path
                                    d="M18.4538 6.58719C18.7362 6.53653 19.0372 6.63487 19.234 6.87109C19.3965 7.06614 19.4538 7.31403 19.4121 7.54579C19.0244 7.30344 18.696 6.97499 18.4538 6.58719Z"
                                    fill="currentColor" />
                                <path opacity="0.5"
                                    d="M16.9576 3.02099C16.156 3 15.2437 3 14.2 3H9.8C5.65164 3 3.57746 3 2.28873 4.31802C1 5.63604 1 7.75736 1 12C1 16.2426 1 18.364 2.28873 19.682C3.57746 21 5.65164 21 9.8 21H14.2C18.3484 21 20.4225 21 21.7113 19.682C23 18.364 23 16.2426 23 12C23 10.9326 23 9.99953 22.9795 9.1797C22.3821 9.47943 21.7103 9.64773 21 9.64773C18.5147 9.64773 16.5 7.58722 16.5 5.04545C16.5 4.31904 16.6646 3.63193 16.9576 3.02099Z"
                                    fill="currentColor" />
                            </svg>
                            <span
                                class="ltr:pl-3 rtl:pr-3 text-black dark:text-[#506690] dark:group-hover:text-white-dark">Surat
                                Masuk</span>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/apps/mailbox" class="group">
                        <div class="flex items-center">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M6.71947 10.5997L8.15874 11.7991C9.99537 13.3296 10.9137 14.0949 11.9998 14.0949C13.086 14.0949 14.0043 13.3296 15.8409 11.7991L17.2802 10.5997C17.6341 10.3048 17.811 10.1574 17.9054 9.95578C17.9998 9.75421 17.9998 9.52389 17.9998 9.06325V7C17.9998 6.67937 17.9998 6.38054 17.998 6.10169C17.9863 4.3306 17.9002 3.36486 17.2676 2.73223C16.5354 2 15.3569 2 12.9998 2H10.9998C8.64282 2 7.46431 2 6.73207 2.73223C6.09945 3.36486 6.01155 4.3306 5.99984 6.10169C5.998 6.38054 5.99984 6.67937 5.99984 7V9.06325C5.99984 9.52389 5.99984 9.75421 6.09425 9.95578C6.18866 10.1574 6.3656 10.3048 6.71947 10.5997ZM9.24976 6C9.24976 5.58579 9.58554 5.25 9.99976 5.25H13.9998C14.414 5.25 14.7498 5.58579 14.7498 6C14.7498 6.41421 14.414 6.75 13.9998 6.75H9.99976C9.58554 6.75 9.24976 6.41421 9.24976 6ZM10.2498 9C10.2498 8.58579 10.5855 8.25 10.9998 8.25H12.9998C13.414 8.25 13.7498 8.58579 13.7498 9C13.7498 9.41421 13.414 9.75 12.9998 9.75H10.9998C10.5855 9.75 10.2498 9.41421 10.2498 9Z"
                                    fill="currentColor" />
                                <path opacity="0.5"
                                    d="M8.15874 11.7993L6.71947 10.6C6.3656 10.3051 6.18866 10.1576 6.09425 9.95605C5.99984 9.75448 5.99984 9.52416 5.99984 9.06352V7.00027C5.99984 6.89095 5.99963 6.78417 5.99942 6.67986C5.99901 6.4782 5.99863 6.28574 5.99984 6.10195C4.69982 6.22984 3.82473 6.51868 3.17157 7.17184C2 8.34341 2 10.2299 2 14.0011C2 17.7723 2 19.658 3.17157 20.8295C4.34314 22.0011 6.22876 22.0011 9.99998 22.0011H14C17.7712 22.0011 19.6569 22.0011 20.8284 20.8295C22 19.658 22 17.7723 22 14.0011C22 10.2299 22 8.34341 20.8284 7.17184C20.1749 6.51832 19.2992 6.22934 17.998 6.10156C17.9998 6.38042 17.9998 6.67963 17.9998 7.00027V9.06352C17.9998 9.52416 17.9998 9.75448 17.9054 9.95605C17.811 10.1576 17.6341 10.3051 17.2802 10.6L15.8409 11.7993C14.0043 13.3299 13.086 14.0951 11.9998 14.0951C10.9137 14.0951 9.99537 13.3299 8.15874 11.7993Z"
                                    fill="currentColor" />
                            </svg>

                            <span
                                class="ltr:pl-3 rtl:pr-3 text-black dark:text-[#506690] dark:group-hover:text-white-dark">Surat
                                Keluar</span>
                        </div>
                    </a>
                </li>

                <h2
                    class="py-3 px-7 flex items-center uppercase font-extrabold bg-white-light/30 dark:bg-dark dark:bg-opacity-[0.08] -mx-4 mb-1">

                    <svg class="w-4 h-5 flex-none hidden" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"
                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg>
                    <span>Internal</span>
                </h2>
                <li class="nav-item">
                    <a href="/apps/mailbox" class="group">
                        <div class="flex items-center">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.5"
                                    d="M21 15.9983V9.99826C21 7.16983 21 5.75562 20.1213 4.87694C19.3529 4.10856 18.175 4.01211 16 4H8C5.82497 4.01211 4.64706 4.10856 3.87868 4.87694C3 5.75562 3 7.16983 3 9.99826V15.9983C3 18.8267 3 20.2409 3.87868 21.1196C4.75736 21.9983 6.17157 21.9983 9 21.9983H15C17.8284 21.9983 19.2426 21.9983 20.1213 21.1196C21 20.2409 21 18.8267 21 15.9983Z"
                                    fill="currentColor" />
                                <path
                                    d="M8 3.5C8 2.67157 8.67157 2 9.5 2H14.5C15.3284 2 16 2.67157 16 3.5V4.5C16 5.32843 15.3284 6 14.5 6H9.5C8.67157 6 8 5.32843 8 4.5V3.5Z"
                                    fill="currentColor" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M6.25 10.5C6.25 10.0858 6.58579 9.75 7 9.75H17C17.4142 9.75 17.75 10.0858 17.75 10.5C17.75 10.9142 17.4142 11.25 17 11.25H7C6.58579 11.25 6.25 10.9142 6.25 10.5ZM7.25 14C7.25 13.5858 7.58579 13.25 8 13.25H16C16.4142 13.25 16.75 13.5858 16.75 14C16.75 14.4142 16.4142 14.75 16 14.75H8C7.58579 14.75 7.25 14.4142 7.25 14ZM8.25 17.5C8.25 17.0858 8.58579 16.75 9 16.75H15C15.4142 16.75 15.75 17.0858 15.75 17.5C15.75 17.9142 15.4142 18.25 15 18.25H9C8.58579 18.25 8.25 17.9142 8.25 17.5Z"
                                    fill="currentColor" />
                            </svg>


                            <span
                                class="ltr:pl-3 rtl:pr-3 text-black dark:text-[#506690] dark:group-hover:text-white-dark">Memo
                                Internal</span>
                        </div>
                    </a>
                </li>

                <h2
                    class="py-3 px-7 flex items-center uppercase font-extrabold bg-white-light/30 dark:bg-dark dark:bg-opacity-[0.08] -mx-4 mb-1">

                    <svg class="w-4 h-5 flex-none hidden" viewBox="0 0 24 24" stroke="currentColor"
                        stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg>
                    <span>Pengaturan</span>
                </h2>

                <li class="nav-item">
                    <a href="/apps/mailbox" class="group">
                        <div class="flex items-center">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M2 17.5C2 15.0147 4.01472 13 6.5 13H9.2C9.83006 13 10.1451 13 10.3857 13.1226C10.5974 13.2305 10.7695 13.4026 10.8774 13.6143C11 13.8549 11 14.1699 11 14.8V17.5C11 19.9853 8.98528 22 6.5 22C4.01472 22 2 19.9853 2 17.5Z"
                                    fill="currentColor" />
                                <path
                                    d="M13 6.5C13 4.01472 15.0147 2 17.5 2C19.9853 2 22 4.01472 22 6.5C22 8.98528 19.9853 11 17.5 11H14.2857C14.1365 11 14.0618 11 13.999 10.9929C13.4775 10.9342 13.0658 10.5225 13.0071 10.001C13 9.93818 13 9.86355 13 9.71429V6.5Z"
                                    fill="currentColor" />
                                <g opacity="0.5">
                                    <path
                                        d="M2 6.5C2 4.01472 4.01472 2 6.5 2C8.98528 2 11 4.01472 11 6.5V9.5C11 9.84874 11 10.0231 10.9617 10.1662C10.8576 10.5544 10.5544 10.8576 10.1662 10.9617C10.0231 11 9.84874 11 9.5 11H6.5C4.01472 11 2 8.98528 2 6.5Z"
                                        fill="currentColor" />
                                    <path
                                        d="M13 14.5C13 14.1513 13 13.9769 13.0383 13.8338C13.1424 13.4456 13.4456 13.1424 13.8338 13.0383C13.9769 13 14.1513 13 14.5 13H17.5C19.9853 13 22 15.0147 22 17.5C22 19.9853 19.9853 22 17.5 22C15.0147 22 13 19.9853 13 17.5V14.5Z"
                                        fill="currentColor" />
                                </g>
                            </svg>

                            <span
                                class="ltr:pl-3 rtl:pr-3 text-black dark:text-[#506690] dark:group-hover:text-white-dark">Penomoran
                                Surat</span>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/apps/mailbox" class="group">
                        <div class="flex items-center">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle opacity="0.5" cx="15" cy="6" r="3" fill="currentColor" />
                                <ellipse opacity="0.5" cx="16" cy="17" rx="5" ry="3"
                                    fill="currentColor" />
                                <circle cx="9.00098" cy="6" r="4" fill="currentColor" />
                                <ellipse cx="9.00098" cy="17.001" rx="7" ry="4"
                                    fill="currentColor" />
                            </svg>


                            <span
                                class="ltr:pl-3 rtl:pr-3 text-black dark:text-[#506690] dark:group-hover:text-white-dark">Pengguna</span>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/apps/mailbox" class="group">
                        <div class="flex items-center">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M9.87763 4.24993C10.1869 3.37503 11.0213 2.75 11.9998 2.75C12.9783 2.75 13.8127 3.37503 14.122 4.24993C14.26 4.64047 14.6885 4.84517 15.079 4.70713C15.4696 4.56909 15.6742 4.1406 15.5362 3.75007C15.0218 2.29459 13.6337 1.25 11.9998 1.25C10.3658 1.25 8.9778 2.29459 8.46337 3.75007C8.32533 4.1406 8.53002 4.56909 8.92056 4.70713C9.3111 4.84517 9.73959 4.64047 9.87763 4.24993ZM2.74709 8.09098C2.69375 8.05631 2.63765 8.02929 2.58008 8.00965C2.73322 7.69204 2.92679 7.41623 3.17145 7.17157C4.34303 6 6.22864 6 9.99988 6H13.9999C17.7711 6 19.6567 6 20.8283 7.17157C21.073 7.41626 21.2666 7.6921 21.4197 8.00975C21.3623 8.02939 21.3063 8.05637 21.253 8.09098C19.1526 9.45626 17.833 10.3102 16.7364 10.858C16.6701 10.5117 16.3655 10.25 15.9999 10.25C15.5857 10.25 15.2499 10.5858 15.2499 11V11.4581C13.1304 12.0976 10.8693 12.0976 8.74988 11.458V11C8.74988 10.5858 8.41409 10.25 7.99988 10.25C7.63428 10.25 7.32978 10.5116 7.26334 10.8578C6.1669 10.31 4.84732 9.45613 2.74709 8.09098Z"
                                    fill="currentColor" />
                                <path opacity="0.5"
                                    d="M2 13.9998C2 12.0494 2 10.6033 2.16208 9.49951C4.43876 10.9794 5.89798 11.9231 7.25 12.5044V12.9998C7.25 13.414 7.58579 13.7498 8 13.7498C8.40872 13.7498 8.74109 13.4229 8.74982 13.0163C10.8801 13.5779 13.1199 13.5779 15.2502 13.0163C15.259 13.4229 15.5913 13.7498 16 13.7498C16.4142 13.7498 16.75 13.414 16.75 12.9998V12.5045C18.1021 11.9233 19.5613 10.9796 21.8379 9.49971C22 10.6035 22 12.0495 22 13.9998C22 17.7711 22 19.6567 20.8284 20.8283C19.6569 21.9998 17.7712 21.9998 14 21.9998H10C6.22876 21.9998 4.34315 21.9998 3.17157 20.8283C2 19.6567 2 17.7711 2 13.9998Z"
                                    fill="currentColor" />
                            </svg>


                            <span
                                class="ltr:pl-3 rtl:pr-3 text-black dark:text-[#506690] dark:group-hover:text-white-dark">Jabatan</span>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</div>
<script>
    document.addEventListener("alpine:init", () => {
        Alpine.data("sidebar", () => ({
            init() {
                const selector = document.querySelector('.sidebar ul a[href="' + window.location
                    .pathname + '"]');
                if (selector) {
                    selector.classList.add('active');
                    const ul = selector.closest('ul.sub-menu');
                    if (ul) {
                        let ele = ul.closest('li.menu').querySelectorAll('.nav-link');
                        if (ele) {
                            ele = ele[0];
                            setTimeout(() => {
                                ele.click();
                            });
                        }
                    }
                }
            },
        }));
    });
</script>
