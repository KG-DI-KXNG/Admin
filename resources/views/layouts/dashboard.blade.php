<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Document</title>

    <style>
        table {
          font-family: arial, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }
        
        td, th {
          border: 1px solid #dddddd;
          text-align: left;
          padding: 8px;
        }
        
        tr:nth-child(even) {
          background-color: #dddddd;
        }
        </style>
</head>
<body>
    <!-- component -->
<div class="h-screen w-full flex overflow-hidden">
	<nav class="flex flex-col bg-gray-200 dark:bg-gray-900 w-64 px-12 pt-4 pb-6">
		<!-- SideNavBar -->

		<div class="flex flex-row border-b items-center justify-between pb-2">
			<!-- Hearder -->
			<span class="text-lg font-semibold capitalize dark:text-gray-300">
				my admin
			</span>

			<span class="relative ">
				<a
					class="hover:text-green-500 dark-hover:text-green-300
					text-gray-600 dark:text-gray-300"
					href="inbox/">
					<svg
						width="24"
						height="24"
						viewBox="0 0 24 24"
						fill="none"
						stroke="currentColor"
						stroke-width="2"
						stroke-linecap="round"
						stroke-linejoin="round">
						<path
							d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
						<path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
					</svg>
				</a>
				<div
					class="absolute w-2 h-2 rounded-full bg-green-500
					dark-hover:bg-green-300 right-0 mb-5 bottom-0"></div>
			</span>

		</div>

		<div class="mt-8">
			<!-- User info -->
			<img
				class="h-12 w-12 rounded-full object-cover"
				src="https://appzzang.me/data/editor/1608/f9c387cb6bd7a0b004f975cd92cbe2d9_1471626325_6802.png"
				alt="enoshima profile" />
			<h2
				class="mt-4 text-xl dark:text-gray-300 font-extrabold capitalize">
				Hello {{Auth()->user()->name}}
			</h2>
			<span class="text-sm dark:text-gray-300">
				<span class="font-semibold text-green-600 dark:text-green-300">
					Admin
				</span>
				id78903{{Auth()->id()}}
			</span>
		</div>

		<a href="{{route('student')}}"><button
			class="mt-8 flex items-center justify-between py-3 px-2 text-white
			dark:text-gray-200 bg-green-400 dark:bg-green-500 rounded-lg shadow">
			<!-- Action -->
			<span>Add User</span>
			<svg class="h-5 w-5 fill-current" viewBox="0 0 24 24">
				<path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"></path>
			</svg>
		</button></a>

		<ul class="mt-2 text-gray-600">
			<!-- Links -->
			<x-a-link href="{{route('dashboard')}}" :active="request()->routeIs('dashboard')">
					<svg
						class="fill-current h-5 w-5 dark:text-gray-300"
						viewBox="0 0 24 24">
						<path
							d="M16 20h4v-4h-4m0-2h4v-4h-4m-6-2h4V4h-4m6
							4h4V4h-4m-6 10h4v-4h-4m-6 4h4v-4H4m0 10h4v-4H4m6
							4h4v-4h-4M4 8h4V4H4v4z"></path>
					</svg>
					<span
						class="ml-2 capitalize font-medium text-black
						dark:text-gray-300">
						dashboard
					</span>
            </x-a-link>

			<x-a-link href="{{route('allSchedule')}}" :active="request()->routeIs('allSchedule')">
					<svg
						class="fill-current h-5 w-5 dark:text-gray-300"
						viewBox="0 0 24 24">
						<path
							d="M19 19H5V8h14m-3-7v2H8V1H6v2H5c-1.11 0-2 .89-2
							2v14a2 2 0 002 2h14a2 2 0 002-2V5a2 2 0
							00-2-2h-1V1m-1 11h-5v5h5v-5z"></path>
					</svg>
					<span
						class="ml-2 capitalize font-medium text-black
						dark:text-gray-300">
						Shedule
					</span>
			</x-a-link>

			<x-a-link href="{{route('course')}}" :active="request()->routeIs('course')">
				
					<svg class="fill-current h-5 w-5" viewBox="0 0 24 24">
						<path
							d="M12 4a4 4 0 014 4 4 4 0 01-4 4 4 4 0 01-4-4 4 4 0
							014-4m0 10c4.42 0 8 1.79 8 4v2H4v-2c0-2.21 3.58-4
							8-4z"></path>
					</svg>
					<span class="ml-2 capitalize font-medium">Course</span>
			</x-a-link>

			<li class="mt-8">
				<a href="#home" class="flex">
					<svg
						class="fill-current h-5 w-5 dark:text-gray-300"
						viewBox="0 0 24 24">
						<path
							d="M12 13H7v5h5v2H5V10h2v1h5v2M8
							4v2H4V4h4m2-2H2v6h8V2m10 9v2h-4v-2h4m2-2h-8v6h8V9m-2
							9v2h-4v-2h4m2-2h-8v6h8v-6z"></path>
					</svg>
					<span
						class="ml-2 capitalize font-medium text-black
						dark:text-gray-300">
						tasks
					</span>
				</a>
			</li>

		</ul>

		<div class="mt-auto flex items-center text-red-700 dark:text-red-400">
			<!-- important action -->
			<a href="{{route('logout')}}" class="flex items-center">
				<svg class="fill-current h-5 w-5" viewBox="0 0 24 24">
					<path
						d="M16 17v-3H9v-4h7V7l5 5-5 5M14 2a2 2 0 012
						2v2h-2V4H5v16h9v-2h2v2a2 2 0 01-2 2H5a2 2 0 01-2-2V4a2 2
						0 012-2h9z"></path>
				</svg>
				<span class="ml-2 capitalize font-medium">log out</span>
			</a>

		</div>
	</nav>
	<main
		class="flex-1 flex flex-col bg-gray-100 dark:bg-gray-700 transition
		duration-500 ease-in-out overflow-y-auto">
		<div class="mx-10 my-2">
			<nav
				class="flex flex-row justify-between border-b
				dark:border-gray-600 dark:text-gray-400 transition duration-500
				ease-in-out">
				<div class="flex">
					<!-- Top NavBar -->

					<a
						href="#"
						class="py-2 block text-green-500 border-green-500
						dark:text-green-200 dark:border-green-200
						focus:outline-none border-b-2 font-medium capitalize
						transition duration-500 ease-in-out">
						users
					</a>
					<a
						href="{{route('schedule')}}"
						id="scheduleCreate"
						class="ml-6 py-2 block border-b-2 border-transparent
						focus:outline-none font-medium capitalize text-center
						focus:text-green-500 focus:border-green-500
						dark-focus:text-green-200 dark-focus:border-green-200
						transition duration-500 ease-in-out">
						Create Schedule
					</a>
					<button
						class="ml-6 py-2 block border-b-2 border-transparent
						focus:outline-none font-medium capitalize text-center
						focus:text-green-500 focus:border-green-500
						dark-focus:text-green-200 dark-focus:border-green-200
						transition duration-500 ease-in-out">
						access rights
					</button>
				</div>

				<div class="flex items-center select-none">
					<span
						class="hover:text-green-500 dark-hover:text-green-300
						cursor-pointer mr-3 transition duration-500 ease-in-out">

						<svg viewBox="0 0 512 512" class="h-5 w-5 fill-current">
							<path
								d="M505 442.7L405.3
								343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7
								44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1
								208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4
								2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9
								0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7
								0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0
								128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
						</svg>
					</span>

					<input
						class="w-12 bg-transparent focus:outline-none"
						placeholder="Search" />

				</div>

			</nav>
			<h2 class="my-4 text-4xl font-semibold dark:text-gray-400">
				@yield('title')
			</h2>
			
			
			<div
				class="mt-2 flex px-4 py-4 justify-between bg-white
				dark:bg-gray-600 shadow-xl rounded-lg cursor-pointer ">
				<!-- Card -->

				
@livewireStyles
				@yield('content')
@livewireScripts
			</div>
		</div>
        

	</main>

</div>
</body>
</html>