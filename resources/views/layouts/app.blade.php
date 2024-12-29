<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Application</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        accent: {"50":"#fff5f0","100":"#ffd6c2","200":"#feb795","300":"#fe9868","400":"#fd783c","500":"#fb580f","600":"#db4603","700":"#b03802","800":"#862b01","900":"#5a1d00","950":"#2f0f00"}
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-900 text-white">
    @yield('content')
</body>
</html>
