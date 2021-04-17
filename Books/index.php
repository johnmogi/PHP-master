<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books php CRUD</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <script src="./script.js"></script>
</head>

<body>
    <h2 class="text-3xl sm:text-5xl lg:text-6xl leading-none font-extrabold text-gray-900 tracking-tight mb-8 text-center">
        The Book Repository :
    </h2>

    <div class="bg-white dark:bg-gray-800 rounded-tl-xl sm:rounded-t-xl p-4 pb-6 sm:p-8 lg:p-4 lg:pb-6 xl:p-8 space-y-6 sm:space-y-8 lg:space-y-6 xl:space-y-8">

        <div class="mt-10 sm:mt-0">
            <p class="mt-2 text-4xl text-gray-500 text-center leading-none font-extrabold">
                Add a book to the list:
            </p>
            <br />
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form action="books-controller.php" method="post">

                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                    <label for="bookName" class="block text-sm font-medium text-gray-700">Book Name: </label>
                                    <input type="text" name="bookName" id="bookName" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>

                                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                    <label for="authorName" class="block text-sm font-medium text-gray-700">Author Name: </label>
                                    <input type="text" name="authorName" id="authorName" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>

                                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                    <label for="price" class="block text-sm font-medium text-gray-700">Price: </label>
                                    <input type="text" name="price" id="price" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>
                            </div>
                            <br />
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                    <label for="category" class="block text-sm font-medium text-gray-700">Category: </label>
                                    <input type="text" name="category" id="category" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>

                                <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                    <label for="birthdate" class="block text-sm font-medium text-gray-700">Author birth date: </label>
                                    <input type="date" name="birthdate" id="birthdate" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>


                            </div>
                        </div>
                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <input type="hidden" name="command" value="addBook">


                            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Add Book
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>


    <div class="bg-white dark:bg-gray-800 rounded-tl-xl sm:rounded-t-xl p-4 pb-6 sm:p-8 lg:p-4 lg:pb-6 xl:p-8 space-y-6 sm:space-y-8 lg:space-y-6 xl:space-y-8">
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        #
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Name
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Author
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Price
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Category
                                    </th>
                                    <th scope="col" class="relative px-6 py-3">
                                        <span class="sr-only">Edit</span>
                                    </th>
                                    <th scope="col" class="relative px-6 py-3">
                                        <span class="sr-only">Delete</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <?php
                                require_once './books-logic.php';
                                $books = getAllBooksData();
                                foreach ($books as $p) {
                                    //   print_r($p);
                                    echo "<tr>" .
                                        "<td class='px-6 py-4 whitespace-nowrap'><div class='flex items-center'>" .
                                        $p->bookID
                                        .
                                        "</div></td>" .
                                        "<td class='px-6 py-4 whitespace-nowrap'><div class='flex items-center'>" .
                                        $p->bookName
                                        .
                                        "</div></td>" .
                                        "</div></td>" .
                                        "<td class='px-6 py-4 whitespace-nowrap'><div class='flex items-center'>" .
                                        $p->authorName
                                        .
                                        "</div><div class='text-sm text-gray-500'>" .
                                        $p->birthdate .
                                        "</div>" .
                                        "</td>" .
                                        "<td class='px-6 py-4 whitespace-nowrap'><div class='flex items-center'>" .
                                        $p->price
                                        .
                                        "</div></td>" .
                                        "<td class='px-6 py-4 whitespace-nowrap'><div class='flex items-center'>" .
                                        $p->category
                                        .
                                        "</div></td>";
                                }
                                ?>

                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Delete</a>
                                </td>
                                </tr>

                                <!-- More people... -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>