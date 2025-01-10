<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nomination Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
    <body class="bg-gray-100 py-10">

        <div class="max-w-4xl mx-auto bg-white shadow-lg rounded-lg p-8">
            <!-- Nomination Form -->
            <form action="/submit-nomination" method="POST" enctype="multipart/form-data">
                <!-- Add CSRF Token if using Laravel -->
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <!-- Info for Nomination Section -->
                <div class="border-2 border-blue-500 rounded-lg p-6 mb-8">
                    <h2 class="text-lg font-extrabold text-gray-700 mb-6">Info For Nomination</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="committee_type" class="block text-sm font-semibold text-gray-600 mb-2">Committee Type:</label>
                            <select id="committee_type" name="committee_type" class="w-full p-3 border rounded-md focus:ring-2 focus:ring-blue-400 focus:outline-none">
                                <option value="" disabled selected>Select Committee Type</option>
                                <option value="type1">Type 1</option>
                                <option value="type2">Type 2</option>
                            </select>
                        </div>
                        <div>
                            <label for="election_name" class="block text-sm font-semibold text-gray-600 mb-2">Election Name:</label>
                            <select id="election_name" name="election_name" class="w-full p-3 border rounded-md focus:ring-2 focus:ring-blue-400 focus:outline-none">
                                <option value="" disabled selected>Select Election Name</option>
                                <option value="election1">Election 1</option>
                                <option value="election2">Election 2</option>
                            </select>
                        </div>
                        <div>
                            <label for="nominee_name" class="block text-sm font-semibold text-gray-600 mb-2">Nominee Name:</label>
                            <select id="nominee_name" name="nominee_name" class="w-full p-3 border rounded-md focus:ring-2 focus:ring-blue-400 focus:outline-none">
                                <option value="" disabled selected>Select Nominee Name</option>
                                <option value="nominee1">Nominee 1</option>
                                <option value="nominee2">Nominee 2</option>
                            </select>
                        </div>
                        <div>
                            <label for="nominee_symbol" class="block text-sm font-semibold text-gray-600 mb-2">Nominee Symbol:</label>
                            <select id="nominee_symbol" name="nominee_symbol" class="w-full p-3 border rounded-md focus:ring-2 focus:ring-blue-400 focus:outline-none">
                                <option value="" disabled selected>Select Nominee Symbol</option>
                                <option value="symbol1">Symbol 1</option>
                                <option value="symbol2">Symbol 2</option>
                            </select>
                        </div>
                        <div>
                            <label for="district" class="block text-sm font-semibold text-gray-600 mb-2">District:</label>
                            <select id="district" name="district" class="w-full p-3 border rounded-md focus:ring-2 focus:ring-blue-400 focus:outline-none">
                                <option value="" disabled selected>Select District</option>
                                <option value="district1">District 1</option>
                                <option value="district2">District 2</option>
                            </select>
                        </div>
                        <div>
                            <label for="constituency" class="block text-sm font-semibold text-gray-600 mb-2">Constituency:</label>
                            <input id="constituency" name="constituency" type="text" placeholder="Enter Constituency" class="w-full p-3 border rounded-md focus:ring-2 focus:ring-blue-400 focus:outline-none">
                        </div>
                        <div>
                            <label for="dob" class="block text-sm font-semibold text-gray-600 mb-2">Date of Birth:</label>
                            <input id="dob" name="dob" type="date" class="w-full p-3 border rounded-md focus:ring-2 focus:ring-blue-400 focus:outline-none">
                        </div>
                        <div>
                            <label for="nid_number" class="block text-sm font-semibold text-gray-600 mb-2">NID Number:</label>
                            <input id="nid_number" name="nid_number" type="text" placeholder="Enter NID Number" class="w-full p-3 border rounded-md focus:ring-2 focus:ring-blue-400 focus:outline-none">
                        </div>
                        <div>
                            <label for="mobile_number" class="block text-sm font-semibold text-gray-600 mb-2">Mobile Number:</label>
                            <input id="mobile_number" name="mobile_number" type="text" placeholder="Enter Mobile Number" class="w-full p-3 border rounded-md focus:ring-2 focus:ring-blue-400 focus:outline-none">
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-semibold text-gray-600 mb-2">Email:</label>
                            <input id="email" name="email" type="email" placeholder="Enter Email" class="w-full p-3 border rounded-md focus:ring-2 focus:ring-blue-400 focus:outline-none">
                        </div>
                    </div>
                </div>

                <!-- Add Attachment Section -->
                <div class="border rounded-lg bg-gray-50 p-6">
                    <h2 class="text-lg font-extrabold text-gray-700 mb-6">Add Attachment</h2>
                    <div class="space-y-6">
                        <div>
                            <label for="nid_file" class="block text-sm font-semibold text-gray-600 mb-2">NID:</label>
                            <input id="nid_file" name="nid_file" type="file" class="w-full p-3 border rounded-md focus:ring-2 focus:ring-blue-400 focus:outline-none">
                        </div>
                        <div>
                            <label for="tin_file" class="block text-sm font-semibold text-gray-600 mb-2">TIN:</label>
                            <input id="tin_file" name="tin_file" type="file" class="w-full p-3 border rounded-md focus:ring-2 focus:ring-blue-400 focus:outline-none">
                        </div>
                        <div>
                            <label for="symbol_file" class="block text-sm font-semibold text-gray-600 mb-2">Symbol:</label>
                            <input id="symbol_file" name="symbol_file" type="file" class="w-full p-3 border rounded-md focus:ring-2 focus:ring-blue-400 focus:outline-none">
                        </div>
                        <div>
                            <label for="other_file" class="block text-sm font-semibold text-gray-600 mb-2">Other:</label>
                            <input id="other_file" name="other_file" type="file" class="w-full p-3 border rounded-md focus:ring-2 focus:ring-blue-400 focus:outline-none">
                        </div>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="mt-8">
                    <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white font-semibold py-3 px-4 rounded-md shadow-md focus:ring-2 focus:ring-blue-400 focus:outline-none">
                        Submit Nomination
                    </button>
                </div>
            </form>
        </div>

    </body>

</html>
