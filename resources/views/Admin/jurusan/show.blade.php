<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <H1 class="text-center text-4xl font-bold p-11">DETAIL JURUSAN</H1>



    <section class="bg-gray-50  p-3 sm:p-5">
        <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
            <!-- Start coding here -->
            <div class="bg-white relative shadow-md sm:rounded-lg overflow-hidden">
                <section class="bg-white">
                    <div class="mx-auto max-w-4xl">

                        <div class="p-6">

                            <div class="grid grid-cols-2 gap-2">
                                <div>

                                    <div class="w-full">

                                        <h3 class="text-xl font-bold">{{ $jurusan->jurusan}}</h3>
                                    </div>
                                    
                                    <div class="sm:col-span-2">

                                        {!! $jurusan->detail !!}
                                    </div>  

                                </div>
                            </div>


                        </div>



                    </div>
                </section>

            </div>
        </div>
    </section>

    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>

</body>

</html>