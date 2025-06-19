@props([
    'searchText' => '',
    'pager' => null,
    'filteredMailListCount' => 0,
])

<div class="flex justify-between items-center flex-wrap-reverse sm:flex-nowrap gap-4 p-4">
    {{-- Search Box --}}
    <div class="flex items-center w-full sm:w-auto">
        <div class="relative group">
            <input type="text" placeholder="Search Mail"
                class="form-input ltr:pr-8 rtl:pl-8 peer"
                value="{{ $searchText }}"
                @keyup="$dispatch('searchmailskeyup', $event.target.value)" />
            <div
                class="absolute ltr:right-[11px] rtl:left-[11px] top-1/2 -translate-y-1/2 peer-focus:text-primary">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg" class="w-4 h-4">
                    <circle cx="11.5" cy="11.5" r="9.5" stroke="currentColor"
                        stroke-width="1.5" opacity="0.5"></circle>
                    <path d="M18.5 18.5L22 22" stroke="currentColor" stroke-width="1.5"
                        stroke-linecap="round"></path>
                </svg>
            </div>
        </div>
    </div>

    {{-- Pagination --}}
    <div class="flex items-center sm:w-auto w-full sm:justify-end justify-center">
        <template x-if="pager && filteredMailListCount > 0">
            <div class="ltr:mr-3 rtl:ml-3"
                x-text="pager.startIndex + 1 + '-' + (pager.endIndex + 1) + ' of ' + filteredMailListCount">
            </div>
        </template>
        <template x-if="pager">
            <button type="button" :disabled="pager.currentPage == 1"
                class="bg-[#f4f4f4] rounded-md p-1 enabled:hover:bg-primary-light dark:bg-white-dark/20 enabled:dark:hover:bg-white-dark/30 ltr:mr-3 rtl:ml-3 disabled:opacity-60 disabled:cursor-not-allowed"
                @click="$dispatch('changepage', pager.currentPage - 1)">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 rtl:rotate-180">
                    <path d="M15 5L9 12L15 19" stroke="currentColor" stroke-width="1.5"
                        stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>
            <button type="button" :disabled="pager.currentPage == pager.totalPages"
                class="bg-[#f4f4f4] rounded-md p-1 enabled:hover:bg-primary-light dark:bg-white-dark/20 enabled:dark:hover:bg-white-dark/30 disabled:opacity-60 disabled:cursor-not-allowed"
                @click="$dispatch('changepage', pager.currentPage + 1)">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:rotate-180">
                    <path d="M15 5L9 12L15 19" stroke="currentColor" stroke-width="1.5"
                        stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>
        </template>
    </div>
</div>
