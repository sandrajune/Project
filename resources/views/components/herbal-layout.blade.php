<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{$title ?? "Herbal World"}}</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">

    @vite(['resources/css/app.css','resources/scss/app.scss', 'resources/js/app.js'])

</head>


<body class="body">
    <x-partials.navbar>
    
    <div>
        {{$slot}}
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"></script>

       {{$script ?? ""}}


       <main class="container mx-auto mt-8">
        <div class="bg-white p-6 rounded shadow-md">
          <h1 class="text-2xl font-bold text-green-800 mb-4">Herbs and Remedies</h1>
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Example Item -->
            <div class="p-4 bg-green-100 rounded shadow">
              <h2 class="text-lg font-bold text-green-900">Herb Name</h2>
              <p>Description of the herb and its remedies.</p>
            </div>
            <!-- Add more items here -->
          </div>
        </div>

        <div class="bg-white p-6 rounded shadow-md">
          <h2 class="text-2xl font-bold text-green-800 mb-4">Forum</h2>
          <div class="space-y-6">
            <!-- Example Question and Answer -->
            <div class="p-4 bg-green-100 rounded shadow">
              <h3 class="text-lg font-bold text-green-900">Question Title</h3>
              <p class="text-gray-700">User question content...</p>
              <div class="mt-4 bg-white p-4 rounded shadow">
                <h4 class="font-bold text-green-800">Answer</h4>
                <p class="text-gray-700">User answer content...</p>
              </div>
            </div>
            <!-- Add more questions and answers here -->
          </div>
        </div>
      </main>
</body>
</html>