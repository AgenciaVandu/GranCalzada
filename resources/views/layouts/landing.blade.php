<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@splidejs/splide@2.4.21/dist/css/themes/splide-default.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@2.4.21/dist/css/splide-core.min.css">


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
        integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="font-poppins">
    <header>
        <div class="relative bg-pink-main" x-data="{open:false}">
            <div class="max-w-7xl mx-auto sm:px-6">
                <div
                    class="flex justify-between items-center border-b-2 border-pink-main py-2 md:justify-start md:space-x-10">
                    <div class="flex justify-start lg:w-0 lg:flex-1 mx-4">
                        <a href="#">
                            <span class="sr-only">Workflow</span>
                            <svg width="180" height="76" viewBox="0 0 265 76" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M2.90006 66.58C6.51006 73.09 13.0201 75.07 19.0001 75.55C26.0601 76.12 33.8101 74.88 38.8801 68.14C41.2101 65.04 42.7701 61.01 43.9401 56.87C46.3601 48.26 47.0901 20.86 43.4501 13.09C41.6901 9.34003 39.0501 6.48003 36.1801 4.36003C27.0001 -2.39997 16.5101 -1.08996 8.02007 6.84003C2.26007 12.22 1.15006 18.79 0.400064 27.85C-0.219936 35.19 -0.569936 60.33 2.90006 66.58Z"
                                    fill="white" />
                                <path
                                    d="M35.5899 40.9H36.5599V38.52H35.5899C31.0899 38.52 27.1099 40.78 24.7099 44.22V37.5C28.8799 36.63 34.1399 32.44 34.1399 23.07H31.7599C31.7599 31.19 27.4999 34.19 24.7099 35.02V31.1C27.0999 30.48 28.4999 27.91 28.4999 23.96C28.4999 19.19 25.2199 15.46 21.0199 15.46C17.3199 15.46 9.68994 18.31 9.68994 27.11C9.68994 35.03 17.5599 37.42 22.3299 37.65V38.46V44.22C19.9299 40.78 15.9499 38.52 11.4499 38.52H10.4799V40.9H11.4499C17.0799 40.9 21.7199 45.2 22.2699 50.69C19.8699 47.29 15.9199 45.06 11.4499 45.06H10.4799V47.44H11.4499C17.4499 47.44 22.3299 52.32 22.3299 58.32V59.29V61.24H24.7099V59.29V58.32C24.7099 52.32 29.5899 47.44 35.5899 47.44H36.5599V45.06H35.5899C31.1199 45.06 27.1699 47.29 24.7599 50.69C25.3099 45.2 29.9599 40.9 35.5899 40.9ZM12.0699 27.11C12.0699 19.41 19.1299 17.84 21.0199 17.84C23.8799 17.84 26.1199 20.53 26.1199 23.97C26.1199 25.15 25.9599 27.58 24.6999 28.5C24.5699 26.11 23.4599 23.3 21.4499 22.21C20.2499 21.55 18.9099 21.63 17.6799 22.42C16.3699 23.27 15.8699 24.87 16.3799 26.6C16.9899 28.67 19.0399 30.77 22.3299 31.18V35.26C19.8499 35.07 12.0699 33.94 12.0699 27.11ZM22.3299 28.78C20.2799 28.43 19.0299 27.18 18.6599 25.94C18.5799 25.68 18.3799 24.81 18.9699 24.42C19.2799 24.22 19.5399 24.15 19.7599 24.15C19.9799 24.15 20.1599 24.22 20.3099 24.3C21.3899 24.88 22.2699 26.86 22.3299 28.78Z"
                                    fill="#EE4A7B" />
                                <path
                                    d="M61.9402 56.2201C61.6102 55.8601 61.2902 55.6201 60.9702 55.5001C60.6602 55.3801 60.3502 55.3201 60.0302 55.3201C59.5602 55.3201 59.1402 55.4001 58.7602 55.5701C58.3802 55.7401 58.0502 55.9701 57.7802 56.2601C57.5102 56.5501 57.3002 56.9001 57.1502 57.2901C57.0002 57.6801 56.9302 58.1001 56.9302 58.5601C56.9302 59.0501 57.0002 59.4901 57.1502 59.9001C57.3002 60.3101 57.5102 60.6601 57.7802 60.9601C58.0502 61.2601 58.3802 61.4901 58.7602 61.6601C59.1402 61.8301 59.5602 61.9201 60.0302 61.9201C60.4002 61.9201 60.7502 61.8301 61.1002 61.6601C61.4502 61.4901 61.7702 61.2101 62.0702 60.8201L63.4002 61.7701C62.9902 62.3301 62.4902 62.7401 61.9002 63.0001C61.3102 63.2601 60.6902 63.3801 60.0202 63.3801C59.3202 63.3801 58.6802 63.2701 58.1002 63.0401C57.5202 62.8101 57.0102 62.4901 56.5902 62.0801C56.1702 61.6701 55.8402 61.1701 55.6002 60.5901C55.3602 60.0101 55.2402 59.3701 55.2402 58.6601C55.2402 57.9401 55.3602 57.2801 55.6002 56.6801C55.8402 56.0901 56.1702 55.5801 56.5902 55.1601C57.0102 54.7401 57.5102 54.4201 58.1002 54.1901C58.6802 53.9601 59.3202 53.8501 60.0202 53.8501C60.6302 53.8501 61.2002 53.9601 61.7302 54.1801C62.2502 54.4001 62.7402 54.7701 63.1902 55.2901L61.9402 56.2201Z"
                                    fill="white" />
                                <path d="M67 54.0901H68.61V63.1401H67V54.0901Z" fill="white" />
                                <path
                                    d="M80.4001 59.8201C80.4001 60.3701 80.3101 60.8601 80.1201 61.3001C79.9301 61.7401 79.6801 62.1101 79.3501 62.4201C79.0301 62.7301 78.6401 62.9601 78.2001 63.1301C77.7601 63.3001 77.2701 63.3801 76.7601 63.3801C76.2401 63.3801 75.7601 63.3001 75.3201 63.1301C74.8801 62.9601 74.4901 62.7301 74.1601 62.4201C73.8301 62.1101 73.5801 61.7401 73.3901 61.3001C73.2101 60.8601 73.1201 60.3701 73.1201 59.8201V54.0901H74.7301V59.7701C74.7301 59.9901 74.7601 60.2201 74.8301 60.4701C74.9001 60.7101 75.0101 60.9401 75.1701 61.1401C75.3301 61.3401 75.5401 61.5101 75.8001 61.6401C76.0601 61.7701 76.3801 61.8401 76.7701 61.8401C77.1501 61.8401 77.4801 61.7701 77.7401 61.6401C78.0001 61.5101 78.2101 61.3401 78.3701 61.1401C78.5301 60.9401 78.6401 60.7101 78.7101 60.4701C78.7801 60.2301 78.8101 59.9901 78.8101 59.7701V54.0901H80.4201V59.8201H80.4001Z"
                                    fill="white" />
                                <path
                                    d="M84.9402 54.0901H88.5102C89.1102 54.0901 89.6802 54.1801 90.2402 54.3701C90.7902 54.5501 91.2802 54.8301 91.7102 55.2101C92.1402 55.5901 92.4802 56.0601 92.7302 56.6201C92.9902 57.1901 93.1102 57.8501 93.1102 58.6201C93.1102 59.4001 92.9602 60.0701 92.6702 60.6301C92.3802 61.2001 92.0002 61.6701 91.5302 62.0401C91.0702 62.4101 90.5502 62.6901 89.9802 62.8701C89.4102 63.0501 88.8602 63.1401 88.3102 63.1401H84.9302V54.0901H84.9402ZM87.7502 61.6901C88.2502 61.6901 88.7302 61.6301 89.1802 61.5201C89.6302 61.4001 90.0202 61.2301 90.3502 60.9801C90.6802 60.7401 90.9402 60.4201 91.1402 60.0301C91.3302 59.6401 91.4302 59.1701 91.4302 58.6201C91.4302 58.0701 91.3402 57.6101 91.1702 57.2101C91.0002 56.8201 90.7602 56.5001 90.4602 56.2601C90.1602 56.0201 89.8002 55.8401 89.3902 55.7201C88.9802 55.6001 88.5202 55.5501 88.0302 55.5501H86.5602V61.6901H87.7502Z"
                                    fill="white" />
                                <path
                                    d="M100.13 54.0901H101.52L105.42 63.1401H103.58L102.74 61.0701H98.8202L98.0002 63.1401H96.2002L100.13 54.0901ZM102.17 59.6901L100.78 56.0101L99.3602 59.6901H102.17Z"
                                    fill="white" />
                                <path
                                    d="M108.99 54.0901H112.56C113.16 54.0901 113.73 54.1801 114.29 54.3701C114.84 54.5501 115.33 54.8301 115.76 55.2101C116.19 55.5901 116.53 56.0601 116.78 56.6201C117.04 57.1901 117.16 57.8501 117.16 58.6201C117.16 59.4001 117.01 60.0701 116.72 60.6301C116.43 61.2001 116.05 61.6701 115.58 62.0401C115.12 62.4101 114.6 62.6901 114.03 62.8701C113.46 63.0501 112.91 63.1401 112.36 63.1401H108.98V54.0901H108.99ZM111.8 61.6901C112.3 61.6901 112.78 61.6301 113.23 61.5201C113.68 61.4001 114.07 61.2301 114.4 60.9801C114.73 60.7401 114.99 60.4201 115.19 60.0301C115.38 59.6401 115.48 59.1701 115.48 58.6201C115.48 58.0701 115.39 57.6101 115.22 57.2101C115.05 56.8201 114.81 56.5001 114.51 56.2601C114.21 56.0201 113.85 55.8401 113.44 55.7201C113.03 55.6001 112.57 55.5501 112.08 55.5501H110.61V61.6901H111.8Z"
                                    fill="white" />
                                <path
                                    d="M126.54 54.0901H128.39L130.86 60.9301L133.4 54.0901H135.14L131.48 63.1401H130.09L126.54 54.0901Z"
                                    fill="white" />
                                <path d="M138.64 54.0901H140.25V63.1401H138.64V54.0901Z" fill="white" />
                                <path
                                    d="M143.74 54.0901H145.59L148.06 60.9301L150.6 54.0901H152.34L148.68 63.1401H147.29L143.74 54.0901Z"
                                    fill="white" />
                                <path
                                    d="M158.09 54.0901H159.48L163.38 63.1401H161.54L160.7 61.0701H156.78L155.96 63.1401H154.16L158.09 54.0901ZM160.14 59.6901L158.75 56.0101L157.33 59.6901H160.14Z"
                                    fill="white" />
                                <path
                                    d="M77.0702 37.9399L75.1802 38.3099V44.4899L75.2902 45.6399L75.3302 46.5299C74.8602 46.4299 74.6102 46.3799 74.5902 46.3799C74.3702 46.3799 74.1802 46.3799 74.0402 46.3799C73.6202 46.3799 72.5402 46.6899 70.8002 47.3199C69.0602 47.9499 67.3802 48.2599 65.7502 48.2599C62.2002 48.2599 59.2702 46.8699 56.9502 44.0899C54.7802 41.4799 53.7002 38.3999 53.7002 34.8299C53.7002 31.0199 54.7602 27.6499 56.8802 24.7199C59.1002 21.6699 61.7702 20.1499 64.9002 20.1499C65.6602 20.1499 66.4902 20.2299 67.3802 20.3999C68.2702 20.5599 69.2002 20.7399 70.1902 20.9299C70.9002 20.9299 71.5202 20.8599 72.0402 20.7099C72.5102 20.5099 72.8702 20.3799 73.1102 20.2999L75.0302 28.2499L73.6202 28.5799L73.1002 27.6999C71.9702 25.7399 70.9102 24.2999 69.9202 23.3999C68.5902 22.1999 67.0702 21.5999 65.3702 21.5999C63.1802 21.5999 61.4502 22.7199 60.1902 24.9599C59.1002 26.8999 58.5602 29.2199 58.5602 31.9299C58.5602 35.5699 59.3602 38.7799 60.9602 41.5499C62.7602 44.6699 65.1002 46.2299 67.9902 46.2299C68.9002 46.2299 69.4702 46.1799 69.6902 46.0799C69.9102 45.9799 70.1002 45.8799 70.2402 45.7899V38.2399L68.0602 38.0599V36.7699H76.9702L77.0702 37.9399Z"
                                    fill="white" />
                                <path
                                    d="M91.8604 30.8799C91.8604 31.6199 91.5904 32.2199 91.0504 32.6899C90.5104 33.1599 89.8304 33.3899 89.0204 33.3899C88.6304 33.3899 88.1304 33.2799 87.5404 33.0699C87.4404 33.0399 87.3104 32.9799 87.1304 32.8699C86.9604 33.1699 86.8204 33.3999 86.7204 33.5699C86.4204 34.1399 86.2104 34.6299 86.0704 35.0499C85.9304 35.4699 85.8204 35.8599 85.7204 36.2299C85.4504 37.3099 85.3104 38.4199 85.3104 39.5499V46.1199L87.4504 46.4499V47.6699H79.1004V46.4099L81.1004 46.1099V36.8799C81.1004 36.0399 80.9904 35.1499 80.7904 34.1999C80.5804 33.2499 80.3504 32.6099 80.1104 32.2599C79.9604 32.0399 79.6904 31.8799 79.3004 31.7999C78.9104 31.7099 78.6804 31.6699 78.6304 31.6699V30.5299L83.0704 28.6499C83.4604 29.4399 83.6704 29.8699 83.7004 29.9199C83.8704 30.2899 84.0204 30.7399 84.1404 31.2699C84.2604 31.7999 84.3904 32.3399 84.5304 32.8999C84.6704 33.4499 84.7304 33.9999 84.7304 34.5499L85.1404 33.5099C85.6604 32.1999 86.2504 31.1599 86.9204 30.3699C87.7604 29.4099 88.6504 28.9299 89.5804 28.9299C90.4904 28.9299 91.1204 29.1299 91.4704 29.5199C91.7304 29.7999 91.8604 30.2599 91.8604 30.8799Z"
                                    fill="white" />
                                <path
                                    d="M110.46 46.08C110.11 46.6 109.81 46.98 109.54 47.23C108.73 47.99 107.79 48.38 106.73 48.38C105.99 48.38 105.36 48.17 104.84 47.75C104.32 47.33 103.93 46.74 103.66 45.97L102.77 46.67C102.05 47.26 101.38 47.69 100.74 47.96C100.1 48.23 99.3603 48.37 98.5203 48.37C97.2403 48.37 96.1404 47.91 95.2304 47C94.3204 46.09 93.8604 44.97 93.8604 43.66C93.8604 41.93 94.7303 40.35 96.4903 38.92C98.0203 37.66 99.9504 36.7 102.3 36.03L103.3 35.73V34.1C103.3 33.14 102.98 32.3 102.34 31.58C102.04 31.23 101.55 30.94 100.86 30.69C100.64 30.62 100.33 30.53 99.9404 30.43C99.9904 30.92 99.7703 31.48 99.2703 32.09C98.6803 32.83 97.9503 33.2 97.0903 33.2C96.4703 33.2 95.9503 33.02 95.5203 32.66C95.0903 32.3 94.8704 31.82 94.8704 31.2C94.8704 30.46 95.1803 29.91 95.8103 29.54C96.4403 29.17 97.2504 28.99 98.2304 28.99C100.79 28.99 102.91 29.54 104.59 30.65C106.41 31.86 107.33 33.52 107.33 35.64V44.29C107.33 44.73 107.44 45.12 107.66 45.44C107.88 45.76 108.19 45.92 108.58 45.92C108.85 45.92 109.17 45.76 109.54 45.44C109.59 45.39 109.68 45.3 109.8 45.18L110.46 46.08ZM103.44 44.37V37.16L102.7 37.31C101.32 37.66 100.17 38.34 99.2403 39.35C98.3203 40.37 97.8503 41.45 97.8503 42.62C97.8503 43.46 98.1303 44.19 98.7003 44.81C99.2703 45.43 99.9603 45.74 100.77 45.74C101.29 45.74 101.8 45.59 102.3 45.29C102.81 45 103.19 44.69 103.44 44.37Z"
                                    fill="white" />
                                <path
                                    d="M129.8 47.6699H122.18V46.3799L124.03 46.1199V35.3199C124.03 34.3799 123.8 33.5399 123.33 32.7899C122.86 32.0399 122.21 31.6599 121.37 31.6599C120.83 31.6599 120.32 31.7499 119.85 31.9199C119.38 32.0899 118.94 32.3899 118.52 32.7999L117.74 33.6499V46.0799L119.63 46.3399V47.6699H111.64V46.3399L113.64 46.0799V33.9399C113.64 33.3999 113.61 33.0099 113.55 32.7599C113.49 32.5099 113.3 32.2599 112.98 31.9899C112.86 31.8699 112.67 31.7799 112.43 31.7299C112.18 31.6799 111.95 31.6599 111.73 31.6599C111.41 31.6599 111.22 31.6599 111.18 31.6599V30.5199L115.95 28.3899C116.42 28.8599 116.79 29.4099 117.06 30.0299C117.23 30.4499 117.35 30.7899 117.41 31.0699C117.47 31.3399 117.5 31.6599 117.5 32.0299C117.72 31.5399 118.3 30.9299 119.24 30.2199C120.5 29.2599 121.7 28.7799 122.86 28.7799C124.36 28.7799 125.61 29.3599 126.61 30.5199C127.61 31.6799 128.11 33.0499 128.11 34.6199V46.1199L129.81 46.3799V47.6699H129.8Z"
                                    fill="white" />
                                <path
                                    d="M161.57 40.2L161.2 41.2C160.44 43.37 159.18 45.06 157.45 46.28C155.71 47.5 153.73 48.11 151.51 48.11C148.08 48.11 145.33 46.77 143.26 44.08C141.36 41.62 140.41 38.56 140.41 34.91C140.41 30.99 141.4 27.62 143.37 24.81C145.51 21.75 148.28 20.22 151.65 20.22C152.29 20.22 153.54 20.39 155.38 20.74C156.14 20.91 156.65 20.97 156.9 20.92C157.74 20.8 158.25 20.71 158.43 20.66C158.61 20.61 159 20.46 159.59 20.22L161.44 28.35L160.11 28.65L159.63 27.8C158.47 25.74 157.42 24.27 156.49 23.38C155.18 22.13 153.69 21.5 152.02 21.5C149.8 21.5 148.06 22.63 146.81 24.9C145.72 26.87 145.18 29.22 145.18 31.95C145.18 35.32 145.86 38.23 147.21 40.66C148.79 43.49 150.92 44.91 153.61 44.91C155.02 44.91 156.27 44.53 157.36 43.76C158.46 43 159.33 41.94 159.97 40.58L160.38 39.69L161.57 40.2Z"
                                    fill="white" />
                                <path
                                    d="M180.36 46.08C180.01 46.6 179.71 46.98 179.44 47.23C178.63 47.99 177.69 48.38 176.63 48.38C175.89 48.38 175.26 48.17 174.74 47.75C174.22 47.33 173.83 46.74 173.56 45.97L172.67 46.67C171.95 47.26 171.28 47.69 170.64 47.96C170 48.23 169.26 48.37 168.42 48.37C167.14 48.37 166.04 47.91 165.13 47C164.22 46.09 163.76 44.97 163.76 43.66C163.76 41.93 164.63 40.35 166.39 38.92C167.92 37.66 169.85 36.7 172.2 36.03L173.2 35.73V34.1C173.2 33.14 172.88 32.3 172.24 31.58C171.94 31.23 171.45 30.94 170.76 30.69C170.54 30.62 170.23 30.53 169.84 30.43C169.89 30.92 169.67 31.48 169.17 32.09C168.58 32.83 167.85 33.2 166.99 33.2C166.37 33.2 165.85 33.02 165.42 32.66C164.99 32.3 164.77 31.82 164.77 31.2C164.77 30.46 165.08 29.91 165.71 29.54C166.34 29.17 167.15 28.99 168.13 28.99C170.69 28.99 172.81 29.54 174.49 30.65C176.31 31.86 177.23 33.52 177.23 35.64V44.29C177.23 44.73 177.34 45.12 177.56 45.44C177.78 45.76 178.09 45.92 178.48 45.92C178.75 45.92 179.07 45.76 179.44 45.44C179.49 45.39 179.58 45.3 179.7 45.18L180.36 46.08ZM173.33 44.37V37.16L172.59 37.31C171.21 37.66 170.06 38.34 169.13 39.35C168.21 40.37 167.74 41.45 167.74 42.62C167.74 43.46 168.02 44.19 168.59 44.81C169.16 45.43 169.85 45.74 170.66 45.74C171.18 45.74 171.69 45.59 172.19 45.29C172.71 45 173.08 44.69 173.33 44.37Z"
                                    fill="white" />
                                <path
                                    d="M190.34 47.67H181.87V46.38L183.94 46.12V24.29C183.94 24.02 183.94 23.82 183.94 23.7C183.94 23.5 183.94 23.31 183.94 23.11C183.89 22.77 183.74 22.49 183.48 22.28C183.22 22.07 182.84 21.97 182.35 21.97C181.88 21.97 181.6 21.99 181.5 22.04V20.74L188.12 18.22V46.11L190.34 46.37V47.67Z"
                                    fill="white" />
                                <path
                                    d="M207.57 41.1199L205.72 48.0399L204.76 47.8199C204.49 47.7499 204.3 47.7099 204.21 47.7099C204.06 47.6899 203.86 47.6699 203.62 47.6699H192.6V46.4499L202.73 30.9499H200.92C200.13 30.9499 199.46 31.0699 198.9 31.3199C198.35 31.5699 197.75 31.9699 197.11 32.5399C196.57 33.0299 195.99 33.7699 195.37 34.7599C195.17 35.0799 194.91 35.5499 194.59 36.1699L193.37 35.7599L194.96 29.3599L195.81 29.6599H196.62H207.46V30.8799L197.33 46.3699H199.07C199.98 46.3699 200.75 46.2399 201.38 45.9699C202.01 45.6999 202.73 45.2399 203.54 44.5699C204.16 44.0799 204.82 43.3099 205.54 42.2599C205.76 41.9199 206.06 41.4299 206.43 40.7899L207.57 41.1199Z"
                                    fill="white" />
                                <path
                                    d="M226.4 46.08C226.05 46.6 225.75 46.98 225.48 47.23C224.67 47.99 223.73 48.38 222.67 48.38C221.93 48.38 221.3 48.17 220.78 47.75C220.26 47.33 219.87 46.74 219.6 45.97L218.71 46.67C217.99 47.26 217.32 47.69 216.68 47.96C216.04 48.23 215.3 48.37 214.46 48.37C213.18 48.37 212.08 47.91 211.17 47C210.26 46.09 209.8 44.97 209.8 43.66C209.8 41.93 210.67 40.35 212.43 38.92C213.96 37.66 215.89 36.7 218.24 36.03L219.24 35.73V34.1C219.24 33.14 218.92 32.3 218.28 31.58C217.98 31.23 217.49 30.94 216.8 30.69C216.58 30.62 216.27 30.53 215.88 30.43C215.93 30.92 215.71 31.48 215.21 32.09C214.62 32.83 213.89 33.2 213.03 33.2C212.41 33.2 211.89 33.02 211.46 32.66C211.03 32.3 210.81 31.82 210.81 31.2C210.81 30.46 211.12 29.91 211.75 29.54C212.38 29.17 213.19 28.99 214.17 28.99C216.73 28.99 218.85 29.54 220.53 30.65C222.35 31.86 223.27 33.52 223.27 35.64V44.29C223.27 44.73 223.38 45.12 223.6 45.44C223.82 45.76 224.13 45.92 224.52 45.92C224.79 45.92 225.11 45.76 225.48 45.44C225.53 45.39 225.62 45.3 225.74 45.18L226.4 46.08ZM219.37 44.37V37.16L218.63 37.31C217.25 37.66 216.1 38.34 215.17 39.35C214.25 40.37 213.78 41.45 213.78 42.62C213.78 43.46 214.06 44.19 214.63 44.81C215.2 45.43 215.89 45.74 216.7 45.74C217.22 45.74 217.73 45.59 218.23 45.29C218.75 45 219.12 44.69 219.37 44.37Z"
                                    fill="white" />
                                <path
                                    d="M245.7 46.74L241.08 48.3699C240.93 48.15 240.77 47.86 240.6 47.52C240.43 47.18 240.33 46.9799 240.3 46.93C240.2 46.71 240.11 46.4599 240.02 46.1899C239.93 45.9199 239.85 45.57 239.78 45.15L239.04 46.0499C237.91 47.5199 236.43 48.2599 234.6 48.2599C232.55 48.2599 230.91 47.3099 229.68 45.41C228.57 43.7099 228.02 41.6599 228.02 39.2599C228.02 36.5899 228.66 34.27 229.95 32.29C231.38 30.07 233.28 28.9599 235.63 28.9599C236.4 28.9599 237.05 29.03 237.58 29.17C238.11 29.31 238.74 29.56 239.45 29.92V23.7199C239.45 23.0399 239.17 22.5399 238.62 22.2199C238.42 22.0999 238.13 22.04 237.76 22.04C237.58 22.04 237.41 22.04 237.23 22.04C237.18 22.04 237.1 22.04 237 22.04V20.74L243.55 18.7V42.7099C243.55 43.3499 243.61 43.8799 243.73 44.2999C243.85 44.7199 244.12 45.0499 244.53 45.2799C244.94 45.5099 245.33 45.63 245.7 45.63V46.74ZM239.45 43.4399V32.4799C239.15 32.08 238.87 31.69 238.6 31.29C237.88 30.6 237 30.25 235.94 30.25C234.53 30.25 233.5 31.04 232.83 32.63C232.31 33.87 232.05 35.4699 232.05 37.4199C232.05 39.4499 232.41 41.2 233.12 42.66C233.98 44.42 235.24 45.2999 236.89 45.2999C237.63 45.2999 238.26 45.02 238.78 44.45C239.2 43.83 239.42 43.4899 239.45 43.4399Z"
                                    fill="white" />
                                <path
                                    d="M264.04 46.08C263.69 46.6 263.39 46.98 263.12 47.23C262.31 47.99 261.37 48.38 260.31 48.38C259.57 48.38 258.94 48.17 258.42 47.75C257.9 47.33 257.51 46.74 257.24 45.97L256.35 46.67C255.63 47.26 254.96 47.69 254.32 47.96C253.68 48.23 252.94 48.37 252.1 48.37C250.82 48.37 249.72 47.91 248.81 47C247.9 46.09 247.44 44.97 247.44 43.66C247.44 41.93 248.31 40.35 250.07 38.92C251.6 37.66 253.53 36.7 255.88 36.03L256.88 35.73V34.1C256.88 33.14 256.56 32.3 255.92 31.58C255.62 31.23 255.13 30.94 254.44 30.69C254.22 30.62 253.91 30.53 253.52 30.43C253.57 30.92 253.35 31.48 252.85 32.09C252.26 32.83 251.53 33.2 250.67 33.2C250.05 33.2 249.53 33.02 249.1 32.66C248.67 32.3 248.45 31.82 248.45 31.2C248.45 30.46 248.76 29.91 249.39 29.54C250.02 29.17 250.83 28.99 251.81 28.99C254.37 28.99 256.49 29.54 258.17 30.65C259.99 31.86 260.91 33.52 260.91 35.64V44.29C260.91 44.73 261.02 45.12 261.24 45.44C261.46 45.76 261.77 45.92 262.16 45.92C262.43 45.92 262.75 45.76 263.12 45.44C263.17 45.39 263.26 45.3 263.38 45.18L264.04 46.08ZM257.02 44.37V37.16L256.28 37.31C254.9 37.66 253.75 38.34 252.82 39.35C251.9 40.37 251.43 41.45 251.43 42.62C251.43 43.46 251.71 44.19 252.28 44.81C252.85 45.43 253.54 45.74 254.35 45.74C254.87 45.74 255.38 45.59 255.88 45.29C256.39 45 256.77 44.69 257.02 44.37Z"
                                    fill="white" />
                            </svg>

                        </a>
                    </div>
                    <div class="-my-2 md:hidden">
                        <button x-on:click="open= !open" type="button"
                            class="bg-pink-main rounded-md p-2 inline-flex items-center justify-center text-white hover:text-gray-100 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
                            aria-expanded="false">
                            <span class="sr-only">Open menu</span>
                            <!-- Heroicon name: outline/menu -->
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>
                    </div>
                    <nav class="hidden md:flex space-x-10">
                        <a href="#" class="text-base font-poppins text-gray-100 hover:text-pink-200">
                            Gran Calzada
                        </a>
                        <div class="relative" x-data="{open:false}">
                            <!-- Item active: "text-gray-900", Item inactive: "text-gray-500" -->
                            <button x-on:click="open=!open" type="button"
                                class="text-gray-100 group bg-pink-main rounded-md font-poppins inline-flex items-center text-base hover:text-pink-200"
                                aria-expanded="false">
                                <span>Desarrollos</span>
                                <!--Heroicon name: solid/chevron-down Item active: "text-gray-600", Item inactive: "text-gray-400"              -->
                                <svg class="text-gray-100 ml-1 h-5 w-5 group-hover:text-pink-200"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                            <div x-show="open"
                                class="absolute z-10 -ml-4 mt-3 transform px-2 sm:px-0 lg:ml-0 lg:left-1/2 lg:-translate-x-1/2">
                                <div
                                    class="rounded-lg border-2 border-white shadow-lg ring-1 ring-black ring-opacity-5 overflow-hidden">
                                    <div class="relative grid gap-6 bg-pink-main px-5 py-6 sm:gap-8 sm:p-8">
                                        <a href="#" class="-m-3 p-3 flex items-start rounded-lg">
                                            <!-- Heroicon name: outline/chart-bar -->
                                            <div class="ml-1">
                                                <p class="text-base font-poppins text-gray-100">
                                                    Almada
                                                </p>
                                            </div>
                                        </a>
                                        <a href="#" class="-m-3 p-3 flex items-start rounded-lg">
                                            <!-- Heroicon name: outline/chart-bar -->
                                            <div class="ml-1">
                                                <p class="text-base font-poppins text-gray-100">
                                                    Miraverde
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href="#" class="text-base text-gray-100 font-poppins hover:text-pink-200">
                            Galería
                        </a>
                        <a href="#" class="text-base text-gray-100 font-poppins hover:text-pink-200">
                            Blog
                        </a>

                    </nav>
                    <div class="hidden md:flex items-center justify-end md:flex-1 lg:w-0 px-5">
                        <a href="#" class="whitespace-nowrap font-poppins text-blue-main hover:text-blue-900 text-5xl">
                            <i class="fab fa-whatsapp-square"></i>
                        </a>
                        <a href="#"
                            class="ml-8 whitespace-nowrap inline-flex items-center font-poppins justify-center px-9 py-2 border border-transparent shadow-sm text-base text-white bg-blue-main hover:bg-blue-900">
                            Cotiza tu casa
                        </a>
                    </div>
                </div>
            </div>
            {{-- Responsive --}}
            <div x-show="open" class=" top-1 inset-x-0 p-2 transition transform origin-top-right md:hidden">
                <div
                    class="relative rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 bg-pink-main divide-y-2 divide-gray-50  border border-white z-100">
                    <div class="pt-5 pb-6 px-5">
                        <div class="flex items-center justify-between">
                            <div class="-mr-2">
                                <button x-on:click="open = !open" type="button"
                                    class="bg-pink-main rounded-md p-2 inline-flex items-center justify-center text-white hover:text-gray-100 focus:outline-none">
                                    <span class="sr-only">Close menu</span>
                                    <!-- Heroicon name: outline/x -->
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="mt-6 z-100">
                            <nav class="grid gap-y-8">
                                <a href="#" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
                                    <span class="ml-3 text-base font-poppins text-gray-100">
                                        Gran Calzada
                                    </span>
                                </a>
                                <a href="#" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
                                    <span class="ml-3 text-base font-poppins text-gray-100">
                                        Almada
                                    </span>
                                </a>
                                <a href="#" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
                                    <span class="ml-3 text-base font-poppins text-gray-100">
                                        Miraverde
                                    </span>
                                </a>
                                <a href="#" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
                                    <span class="ml-3 text-base font-poppins text-gray-100">
                                        Galería
                                    </span>
                                </a>
                                <a href="#" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
                                    <span class="ml-3 text-base font-poppins text-gray-100">
                                        Blog
                                    </span>
                                </a>

                            </nav>
                        </div>
                    </div>
                    <div class="py-6 px-5 space-y-6">
                        <div class="flex items-center justify-between">
                            <a href="#" class="font-poppins text-blue-main hover:text-blue-900 text-5xl">
                                <i class="fab fa-whatsapp-square"></i>
                            </a>
                            <a href="#"
                                class="font-poppins justify-center px-8 py-2 border border-transparent shadow-sm text-base text-white bg-blue-main hover:bg-blue-900">
                                Cotiza tu casa
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>

    <div class="min-h-screen bg-gray-100">

        @yield('content')

    </div>
    <footer class="bg-pink-main leading-tight">
        <div class="grid grid-cols-1 lg:grid-cols-3 justify-end place-items-stretch gap-y-10 lg:gap-x-4 pt-20 pb-14 px-4 lg:px-20">
            {{-- Col-1 --}}
            <div>
                <img src="http://ximg.es/387x158/ccc/fff" class="w-full object-cover" alt="">
                <div class="grid grid-cols-1 lg:grid-cols-2 text-white">
                    <div class="mt-4">
                        <h3 class="text-base font-bold text-white">Visita nuestros puntos de venta</h3>
                        <ul class="list-disc ml-6 mt-4 mb-4">
                            <li class="ml-4">C.60 Fte Japay.</li>
                            <li class="ml-4">2da. Calle Nueva</li>
                            <li class="ml-4">C.56 x 61 y 63.</li>
                        </ul>
                        <p>Tel: (999) 999 9999</p>
                        <p>Whatsapp: (999) 999 9999</p>
                    </div>
                    <div class="mt-4 lg:ml-3">
                        <h3 class="text-base font-bold text-white whitespace-normal">Síguenos en nuestras redes sociales:</h3>
                        <div class="flex justify-center lg:justify-start mt-4">
                            <i class="mr-3 fab fa-facebook-square fa-2x"></i>
                            <i class="mx-3 fab fa-instagram fa-2x"></i>
                            <i class="mx-3 fab fa-linkedin-in fa-2x"></i>
                            <i class="ml-3 fab fa-whatsapp fa-2x"></i>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Col-2 --}}
            <div>
                <form action="">
                    <input type="text" class="w-full bg-white opacity-50 mb-7 border-0 placeholder-pink-main text-sm py-3" placeholder="Nombre">
                    <input type="text" class="w-full bg-white opacity-50 mb-7 border-0 placeholder-pink-main text-sm py-3" placeholder="Correo">
                    <input type="text" class="w-full bg-white opacity-50 mb-7 border-0 placeholder-pink-main text-sm py-3" placeholder="Telefono">
                    <input type="text" class="w-full bg-white opacity-50 mb-7 border-0 placeholder-pink-main text-sm py-3" placeholder="Input">
                    <input type="text" class="w-full bg-white opacity-50 mb-7 border-0 placeholder-pink-main text-sm py-3" placeholder="Input">
                    <button class="w-full bg-blue-main py-3 text-white font-light">Enviar</button>
                </form>
            </div>
            {{-- Col-3 --}}
            <div class="self-center lg:justify-self-end">
                <div class="grid grid-cols-1 gap-8 lg:gap-20 justify-items-center">
                    <img src="{{ asset('img/logos/gran-calzada-logo.png') }}" alt="">
                    <img src="{{ asset('img/logos/grupo-casitas.png') }}" alt="">
                </div>
            </div>
        </div>
    </footer>
    @stack('modals')

    @livewireScripts

    @yield('js')
</body>

</html>
