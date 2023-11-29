<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
    <!-- <h1>Association connectée</h1> -->
    <!-- debut Navbar -->
    <header class="lg:px-16 px-4 bg-white flex flex-wrap items-center py-4 shadow-md">
    <div class="flex-1 flex justify-between items-center">
        <a href="#" class="text-xl">Company</a>
    </div>

    <label for="menu-toggle" class="pointer-cursor md:hidden block">
      <svg class="fill-current text-gray-900"
        xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
        <title>menu</title>
        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
      </svg>
    </label>
    <input class="hidden" type="checkbox" id="menu-toggle" />

    <div class="hidden md:flex md:items-center md:w-auto w-full" id="menu">
        <nav>
            <ul class="md:flex items-center justify-between text-base text-gray-700 pt-4 md:pt-0">
                <li><a class="md:p-4 py-3 px-0 block" href="/ajouterEvenement">Ajouter Un Evenement</a></li>
                <li><a class="md:p-4 py-3 px-0 block" href="#">Liste Inscrits</a></li>
                <li><a class="md:p-4 py-3 px-0 block" href="#">Liste Accepter</a></li>
                <li><a class="md:p-4 py-3 px-0 block md:mb-0 mb-2" href="#">Contact Us</a></li>
            </ul>
        </nav>
    </div>
</header>
<!-- Fin Navbar -->

    <!-- debut tableau -->

    
<div class="text-gray-900 bg-gray-200">
    <div class="p-4 flex">
        <h1 class="text-3xl">Users</h1>
    </div>
    <div class="px-3 py-4 flex justify-center">
        <table class="w-full text-md bg-white shadow-md rounded mb-4">
            <tbody>
                <tr class="border-b">
                    <th class="text-left p-3 px-5">Libelle</th>
                    <th class="text-left p-3 px-5">Date Limite </th>
                    <th class="text-left p-3 px-5">Description</th>
                    <th class="text-left p-3 px-5">Image</th>
                    <th class="text-left p-3 px-5">Cloturer</th>
                    <th class="text-left p-3 px-5">Date Evenement</th>
                    <th class="text-left p-3 px-5">Action</th>
                    <!-- <th></th> -->
                </tr>
                <tr class="border-b hover:bg-orange-100 bg-gray-100">
                    <td class="p-3 px-5">
                        <input type="text" value="user.name" class="bg-transparent border-b-2 border-gray-300 py-2">
                    </td>
                    <td class="p-3 px-5">
                        <input type="text" value="user.email" class="bg-transparent border-b-2 border-gray-300 py-2">
                    </td>
                    <td class="p-3 px-5">
                        <input type="text" value="user.email" class="bg-transparent border-b-2 border-gray-300 py-2">
                    </td>
                    <td class="p-3 px-5">
                        <input type="text" value="user.email" class="bg-transparent border-b-2 border-gray-300 py-2">
                    </td>
                    <td class="p-3 px-5">
                        <input type="text" value="user.email" class="bg-transparent border-b-2 border-gray-300 py-2">
                    </td>
                    <td class="p-3 px-5">
                        <input type="text" value="user.email" class="bg-transparent border-b-2 border-gray-300 py-2">
                    </td>
                   
                     <td class="p-3 px-5 flex justify-end"> 
                        <button type="button" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">
                            Save
                        </button>
                        <button type="button" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">
                                Delete
                        </button>
                    </td> 
                </tr>
      
              
            </tbody>
        </table>

    </div>
</div>
</body>
</html>