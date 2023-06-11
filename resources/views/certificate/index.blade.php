<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  <style>
    .align-middle-manual {
      display: block;
      margin-left: auto;
      margin-right: auto;
      text-align: center;
    }
  </style>
</head>
<body class="bg-cover bg-center bg-no-repeat flex items-center justify-center">
  <div class="max-w-md bg-white shadow-lg rounded-lg overflow-hidden">
    <div class="py-4 px-6">
      <h2 class="text-4xl font-bold mb-2 text-center mx-auto align-middle-manual" >Certificate of Completion</h2>
      <p class="text-gray-600 text-lg mb-4 text-center align-middle-manual">This certificate is awarded to:</p>
      <h3 class="text-2xl font-bold mb-2 text-center align-middle-manual">{{ $name }}</h3>
      <p class="text-gray-600 text-lg mb-4 text-center align-middle-manual">For completing the course:</p>
      <h4 class="text-xl font-bold mb-2 text-center align-middle-manual">{{ $course }}</h4>
      <p class="text-gray-600 text-lg mb-4 text-center align-middle-manual">On {{ $date }}</p>
    </div>
  </div>
</body>
</html>
