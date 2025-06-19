@props([
    'mail',
    'selectedTab',
    'ids' => [],
])

<tr class="cursor-pointer" @click="$dispatch('selectmail', mail)">
    <td>
        <div class="flex items-center whitespace-nowrap">
            <div class="ltr:mr-3 rtl:ml-3">
                <input type="checkbox" :id="`chk-${mail.id}`"
                    x-model.number="ids" :value="(mail.id)"
                    @click="$event.stopPropagation()" class="form-checkbox" />
            </div>
            <div class="ltr:mr-3 rtl:ml-3" x-tooltip="Star" data-placement="top" role="tooltip">
                <button type="button"
                    class="enabled:hover:text-warning disabled:opacity-60 flex items-center"
                    :class="{ 'text-warning': mail.isStar }"
                    @click.stop="$dispatch('setstar', mail.id)"
                    :disabled="selectedTab === 'trash'">
                    <svg width="24" height="24" viewBox="0 0 24 24"
                        fill="none" xmlns="http://www.w3.org/2000/svg"
                        class="w-5 h-5"
                        :class="{ 'fill-warning': mail.isStar }">
                        <path
                            d="M9.15316 5.40838C10.4198 3.13613 11.0531 2 12 2C12.9469 2 13.5802 3.13612 14.8468 5.40837L15.1745 5.99623C15.5345 6.64193 15.7144 6.96479 15.9951 7.17781C16.2757 7.39083 16.6251 7.4699 17.3241 7.62805L17.9605 7.77203C20.4201 8.32856 21.65 8.60682 21.9426 9.54773C22.2352 10.4886 21.3968 11.4691 19.7199 13.4299L19.2861 13.9372C18.8096 14.4944 18.5713 14.773 18.4641 15.1177C18.357 15.4624 18.393 15.8341 18.465 16.5776L18.5306 17.2544C18.7841 19.8706 18.9109 21.1787 18.1449 21.7602C17.3788 22.3417 16.2273 21.8115 13.9243 20.7512L13.3285 20.4768C12.6741 20.1755 12.3469 20.0248 12 20.0248C11.6531 20.0248 11.3259 20.1755 10.6715 20.4768L10.0757 20.7512C7.77268 21.8115 6.62118 22.3417 5.85515 21.7602C5.08912 21.1787 5.21588 19.8706 5.4694 17.2544L5.53498 16.5776C5.60703 15.8341 5.64305 15.4624 5.53586 15.1177C5.42868 14.773 5.19043 14.4944 4.71392 13.9372L4.2801 13.4299C2.60325 11.4691 1.76482 10.4886 2.05742 9.54773C2.35002 8.60682 3.57986 8.32856 6.03954 7.77203L6.67589 7.62805C7.37485 7.4699 7.72433 7.39083 8.00494 7.17781C8.28555 6.96479 8.46553 6.64194 8.82547 5.99623L9.15316 5.40838Z"
                            stroke="currentColor" stroke-width="1.5" />
                    </svg>
                </button>
            </div>
            <div class="ltr:mr-3 rtl:ml-3" x-tooltip="Important" data-placement="top" role="tooltip">
                <button type="button"
                    class="enabled:hover:text-primary disabled:opacity-60 rotate-90 flex items-center"
                    :class="{ 'text-primary': mail.isImportant }"
                    @click.stop="$dispatch('setimportant', mail.id)"
                    :disabled="selectedTab === 'trash'">
                    <svg width="24" height="24" viewBox="0 0 24 24"
                        fill="none" xmlns="http://www.w3.org/2000/svg"
                        class="w-4.5 h-4.5"
                        :class="{ 'fill-primary': mail.isImportant }">
                        <path
                            d="M21 16.0909V11.0975C21 6.80891 21 4.6646 19.682 3.3323C18.364 2 16.2426 2 12 2C7.75736 2 5.63604 2 4.31802 3.3323C3 4.6646 3 6.80891 3 11.0975V16.0909C3 19.1875 3 20.7358 3.73411 21.4123C4.08421 21.735 4.52615 21.9377 4.99692 21.9915C5.98402 22.1045 7.13673 21.0849 9.44216 19.0458C10.4612 18.1445 10.9708 17.6938 11.5603 17.5751C11.8506 17.5166 12.1494 17.5166 12.4397 17.5751C13.0292 17.6938 13.5388 18.1445 14.5578 19.0458C16.8633 21.0849 18.016 22.1045 19.0031 21.9915C19.4739 21.9377 19.9158 21.735 20.2659 21.4123C21 20.7358 21 19.1875 21 16.0909Z"
                            stroke="currentColor" stroke-width="1.5" />
                    </svg>
                </button>
            </div>
            <div class="dark:text-gray-300 whitespace-nowrap font-semibold"
                :class="{ 'text-gray-500 dark:text-gray-500 font-normal': !mail.isUnread }"
                x-text="mail.firstName ? mail.firstName + ' ' + mail.lastName : mail.email">
            </div>
        </div>
    </td>
    <td>
        <div class="font-medium text-white-dark overflow-hidden min-w-[300px] line-clamp-1">
            <span :class="{ 'text-gray-800 dark:text-gray-300 font-semibold': mail.isUnread }">
                <span x-text="mail.title"></span> &minus;
                <span x-text="mail.displayDescription"></span>
            </span>
        </div>
    </td>
    <td>
        <div class="flex items-center">
            <div class="w-2 h-2 rounded-full"
                :class="{
                    'bg-primary': mail.group === 'personal',
                    'bg-warning': mail.group === 'work',
                    'bg-success': mail.group === 'social',
                    'bg-danger': mail.group === 'private',
                }">
            </div>
            <template x-if="mail.attachments">
                <div class="ltr:ml-4 rtl:mr-4">
                    <svg width="24" height="24" viewBox="0 0 24 24"
                        fill="none" xmlns="http://www.w3.org/2000/svg"
                        class="w-5 h-5">
                        <path
                            d="M7.9175 17.8068L15.8084 10.2535C16.7558 9.34668 16.7558 7.87637 15.8084 6.96951M3 10.0346L9.40419 3.90441C12.0569 1.3652 16.3578 1.3652 19.0105 3.90441"
                            stroke="currentColor" stroke-width="1.5"
                            stroke-linecap="round" />
                        <path opacity="0.5"
                            d="M19.0105 13.0996L19.5291 13.6414L19.0105 13.0996ZM11.0624 20.7076L10.5438 20.1658L11.0624 20.7076ZM4.54388 14.4679L5.0625 15.0097L4.54388 14.4679ZM12.3776 6.9694L11.859 6.4276L12.3776 6.9694ZM19.5291 3.3625C19.2299 3.07608 18.7551 3.08646 18.4687 3.38568C18.1823 3.68491 18.1927 4.15967 18.4919 4.44609L19.5291 3.3625ZM18.4919 12.5578L10.5438 20.1658L11.581 21.2494L19.5291 13.6414L18.4919 12.5578ZM5.0625 15.0097L12.8962 7.51119L11.859 6.4276L4.02527 13.9262L5.0625 15.0097ZM16.327 6.4276C15.0896 5.24313 13.0964 5.24313 11.859 6.4276L12.8962 7.51119C13.5536 6.88194 14.6324 6.88194 15.2898 7.51119L16.327 6.4276ZM5.0625 20.1658C3.57096 18.7381 3.57096 16.4375 5.0625 15.0097L4.02527 13.9262C1.91671 15.9445 1.91671 19.2311 4.02527 21.2494L5.0625 20.1658ZM10.5438 20.1658C9.03379 21.6112 6.57253 21.6112 5.0625 20.1658L4.02527 21.2494C6.11533 23.25 9.49098 23.25 11.581 21.2494L10.5438 20.1658ZM18.4919 4.44609C20.8361 6.68999 20.8361 10.3139 18.4919 12.5578L19.5291 13.6414C22.4903 10.8069 22.4903 6.19703 19.5291 3.3625L18.4919 4.44609Z"
                            fill="currentColor" />
                    </svg>
                </div>
            </template>
        </div>
    </td>
    <td class="whitespace-nowrap font-medium ltr:text-right rtl:text-left"
        x-text="showTime(mail)"></td>
</tr>
