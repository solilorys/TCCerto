<!DOCTYPE html>
<html lang="en">

<head>
    <title>Chat TCCerto</title>
    <link rel="icon" href="https://assets.edlin.app/favicon/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <!-- End JavaScript -->

    <!-- CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <!-- End CSS -->

</head>

<body>
    <form method="POST" action="/respostachat">
        @csrf
        <div class="bg-blue-700">
            <label for="small-input" class="block mb-2 text-sm font-medium">Small input</label>
            <input type="text" name="pergunta" id="small-input" class="block w-1//2 p-2 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500">
            <button type="submit" class="bg-blue-700 hover:bg-yellow-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Default</button>
        </div>
    </form>
</body>

</html>
