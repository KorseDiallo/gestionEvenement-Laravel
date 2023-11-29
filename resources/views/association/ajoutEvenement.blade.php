<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>

<body>
    <!-- debut formulaire -->

    <div class="min-h-screen bg-gray-50 flex flex-col justify-center py-12 sm:px-6 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <img class="mx-auto h-10 w-auto" src="https://www.svgrepo.com/show/301692/login.svg" alt="Workflow">
            <h2 class="mt-6 text-center text-3xl leading-9 font-extrabold text-gray-900">
                Creation D'un Evenement
            </h2>
        </div>

        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
            <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
                <form method="POST" action="/ajouterEvenement">
                    @csrf
                    <div>
                        <label for="email" class="block text-sm font-medium leading-5  text-gray-700">Libelle</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input id="name" name="libelle" type="text" required="" value="" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                        </div>
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium leading-5  text-gray-700">Date Limite Inscription</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input id="name" name="dateLimite" type="date" required="" value="" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                        </div>
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium leading-5  text-gray-700">Description</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input id="name" name="description" type="text" required="" value="" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                        </div>
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium leading-5  text-gray-700">Image En Avant</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input id="name" name="image" placeholder="John Doe" type="file" required="" value="" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                        </div>
                    </div>

                    <div>
                        <label for="name" class="block text-sm font-medium leading-5 text-gray-700">Cloturer</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <select id="name" name="cloturer" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                <option>Selectionner</option>
                                <option value="oui">Oui</option>
                                <option value="non">Non</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium leading-5  text-gray-700">Date Evenement</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input id="name" name="dateEvenement" placeholder="John Doe" type="date" required="" value="" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                        </div>
                    </div>

                    <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                        Ajouter Un Evenement
                    </button>

            </div>
        </div>
        </form>
</body>

</html>