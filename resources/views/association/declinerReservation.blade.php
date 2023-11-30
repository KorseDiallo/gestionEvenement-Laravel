<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    
    <div class="text-gray-900 bg-gray-200">
        <div class="p-4 flex">
            <h1 class="text-3xl">Liste Des Reservations</h1>
        </div>
        <div class="px-3 py-4 flex justify-center">
            <table class="w-full text-md bg-white shadow-md rounded mb-4">
                <tbody>
                    <tr class="border-b">
                        <th class="text-left p-3 px-5">Nom</th>
                        <th class="text-left p-3 px-5">Prenom </th>
                        <th class="text-left p-3 px-5">Date Reservation</th>
                        <th class="text-left p-3 px-5">Action</th>
                    </tr>
                    @foreach($reservations as $reservation)
                        <tr class="border-b hover:bg-orange-100 bg-gray-100">
                            <td class="p-3 px-5">
                                {{ $reservation->user->name }} 
                            </td>
                            <td class="p-3 px-5">
                                {{ $reservation->user->prenom }}
                            </td>
                            <td class="p-3 px-5">
                                {{ $reservation->created_at->format('Y-m-d H:i:s') }} 
                            </td>
                            <td class="p-3 px-5 flex justify-end">
                                <a href="/declineReservation/{{$reservation->id}}">
                                    <button type="button" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">
                                        Decliner Reservation
                                    </button>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    



 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>