<x-layout.default>
    <script defer src="/assets/js/apexcharts.js"></script>
    @slot('title')
        Dashboard
    @endslot

    <div x-data="dashboard">
        <x-breadcrumb :items="[
            [
                'label' => 'Dashboard',
                'url' => '/',
            ],
            [
                'label' => '',
            ],
        ]" />
        <div class="pt-5">
            <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-6 mb-6 text-white">
                <x-surat.card-dashboard
                    title="Surat Masuk"
                    link="#"
                    count="200"
                    percentage="+ 2.35%"
                    percentageColor="bg-white/30"
                    lastWeek="44,700"
                    bgFrom="cyan-500"
                    bgTo="cyan-400"
                />

                <x-surat.card-dashboard
                    title="Surat Keluar"
                    link="#"
                    count="30"
                    percentage="- 2.35%"
                    percentageColor="bg-white/30"
                    lastWeek="84,709"
                    bgFrom="violet-500"
                    bgTo="violet-400"
                />

                <x-surat.card-dashboard
                    title="Memo Internal"
                    link="#"
                    count="46"
                    percentage="- 0.35%"
                    percentageColor="bg-white/30"
                    lastWeek="50.01%"
                    bgFrom="fuchsia-500"
                    bgTo="fuchsia-400"
                />

                <x-surat.card-dashboard
                    title="Pengguna"
                    link="#"
                    count="2"
                    percentage="+ 1.35%"
                    percentageColor="bg-white/30"
                    lastWeek="37,894"
                    bgFrom="blue-500"
                    bgTo="blue-400"
                />
            </div>

            <div class="grid lg:grid-cols-3 gap-6 mb-6">
                <div class="panel h-full p-0 lg:col-span-2">
                    <div
                        class="flex items-start justify-between dark:text-white-light mb-5 p-5 border-b  border-[#e0e6ed] dark:border-[#1b2e4b]">
                        <h5 class="font-semibold text-lg ">Grafik Persuratan</h5>
                        <div x-data="dropdown" @click.outside="open = false" class="dropdown">
                            <a href="javascript:;" @click="toggle">
                                @include('components.icons.dot-menu')
                            </a>
                            <ul x-cloak x-show="open" x-transition x-transition.duration.300ms
                                class="ltr:right-0 rtl:left-0">
                                <li><a href="javascript:;" @click="toggle">Surat Masuk</a></li>
                                <li><a href="javascript:;" @click="toggle">Memo Internal</a></li>
                                <li><a href="javascript:;" @click="toggle">Download</a></li>
                            </ul>
                        </div>
                    </div>

                    <div x-ref="uniqueVisitorSeries" class="overflow-hidden">
                        <!-- loader -->
                        <div
                            class="min-h-[360px] grid place-content-center bg-white-light/30 dark:bg-dark dark:bg-opacity-[0.08] ">
                            <span
                                class="animate-spin border-2 border-black dark:border-white !border-l-transparent  rounded-full w-5 h-5 inline-flex"></span>
                        </div>
                    </div>
                </div>

                <div class="panel h-full">
                    <div
                        class="flex items-start justify-between dark:text-white-light mb-5 -mx-5 p-5 pt-0 border-b  border-[#e0e6ed] dark:border-[#1b2e4b]">
                        <h5 class="font-semibold text-lg ">Log Aktifitas</h5>
                    </div>
                    <div class="perfect-scrollbar relative h-[360px] pr-3 -mr-3">
                        <div class="space-y-7">
                            <x-surat.timeline-item
                                color="secondary"
                                icon="components.icons.plus"
                                title="Surat Berhasil DIbuat"
                                titleLink="javascript:;"
                                date="27 Feb, 2020" />
                            <x-surat.timeline-item
                                color="primary"
                                icon="components.icons.centang"
                                title="Surat Berhasil DIbuat"
                                titleLink="javascript:;"
                                date="27 Feb, 2020" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener("alpine:init", () => {
            // total-visit
            Alpine.data("dashboard", () => ({
                init() {
                    isDark = this.$store.app.theme === "dark" || this.$store.app.isDarkMode ? true :
                        false;
                    isRtl = this.$store.app.rtlClass === "rtl" ? true : false;

                    const uniqueVisitorSeries = null;

                    // statistics
                    setTimeout(() => {
                        // unique visitors
                        this.uniqueVisitorSeries = new ApexCharts(this.$refs
                            .uniqueVisitorSeries, this.uniqueVisitorSeriesOptions);
                        this.$refs.uniqueVisitorSeries.innerHTML = "";
                        this.uniqueVisitorSeries.render();
                    }, 300);

                    this.$watch('$store.app.theme', () => {
                        isDark = this.$store.app.theme === "dark" || this.$store.app
                            .isDarkMode ? true : false;
                        this.uniqueVisitorSeries.updateOptions(this.uniqueVisitorSeriesOptions);
                    });

                    this.$watch('$store.app.rtlClass', () => {
                        isRtl = this.$store.app.rtlClass === "rtl" ? true : false;
                        this.uniqueVisitorSeries.updateOptions(this.uniqueVisitorSeriesOptions);
                    });
                },

                // unique visitors
                get uniqueVisitorSeriesOptions() {
                    return {
                        series: [{
                                name: 'Surat Masuk',
                                data: [58, 44, 55, 57, 56, 61, 58, 63, 60, 66, 56, 63]
                            },
                            {
                                name: 'Memo Internal',
                                data: [91, 76, 85, 101, 98, 87, 105, 91, 114, 94, 66, 70]
                            },
                        ],
                        chart: {
                            height: 360,
                            type: 'bar',
                            fontFamily: 'Nunito, sans-serif',
                            toolbar: {
                                show: false
                            }
                        },
                        dataLabels: {
                            enabled: false
                        },
                        stroke: {
                            width: 2,
                            colors: ['transparent']
                        },
                        colors: ['#5c1ac3', '#ffbb44'],
                        dropShadow: {
                            enabled: true,
                            blur: 3,
                            color: '#515365',
                            opacity: 0.4,
                        },
                        plotOptions: {
                            bar: {
                                horizontal: false,
                                columnWidth: '55%',
                                borderRadius: 10
                            }
                        },
                        legend: {
                            position: 'bottom',
                            horizontalAlign: 'center',
                            fontSize: '14px',
                            itemMargin: {
                                horizontal: 8,
                                vertical: 8
                            }
                        },
                        grid: {
                            borderColor: isDark ? '#191e3a' : '#e0e6ed',
                            padding: {
                                left: 20,
                                right: 20
                            }
                        },
                        xaxis: {
                            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug',
                                'Sep', 'Oct', 'Nov', 'Dec'
                            ],
                            axisBorder: {
                                show: true,
                                color: isDark ? '#3b3f5c' : '#e0e6ed'
                            },
                        },
                        yaxis: {
                            tickAmount: 6,
                            opposite: isRtl ? true : false,
                            labels: {
                                offsetX: isRtl ? -10 : 0,
                            }
                        },
                        fill: {
                            type: 'gradient',
                            gradient: {
                                shade: isDark ? 'dark' : 'light',
                                type: 'vertical',
                                shadeIntensity: 0.3,
                                inverseColors: false,
                                opacityFrom: 1,
                                opacityTo: 0.8,
                                stops: [0, 100]
                            },
                        },
                        tooltip: {
                            marker: {
                                show: true,
                            },
                            y: {
                                formatter: (val) => {
                                    return val;
                                },
                            },
                        },
                    }
                },
            }));
        });
    </script>
</x-layout.default>
