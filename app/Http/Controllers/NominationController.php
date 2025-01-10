<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Nomination;

class NominationController extends Controller
{
    /**
     * Show the nomination form.
     *
     * @return \Illuminate\View\View
     */
    public function showForm()
    {
        $title = 'Nomination Form';
        return view('nomination-form', compact('title'));
    }

    /**
     * Handle nomination form submission.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function submitForm(Request $request)
    {
        // Step 1: Validate the data (all fields optional)
        try {
            $validatedData = $request->validate([
                'committee_type' => 'nullable|string|max:255',
                'election_name' => 'nullable|string|max:255',
                'nominee_name' => 'nullable|string|max:255',
                'district' => 'nullable|string|max:255',
                'constituency' => 'nullable|string|max:255',
                'dob' => 'nullable|date',
                'nid_number' => 'nullable|numeric',
                'mobile_number' => 'nullable|numeric',
                'email' => 'nullable|email|max:255',
                'nid_file' => 'nullable|file|mimes:pdf,jpg,png|max:2048',
                'tin_file' => 'nullable|file|mimes:pdf,jpg,png|max:2048',
                'symbol_file' => 'nullable|file|mimes:pdf,jpg,png|max:2048',
                'other_file' => 'nullable|file|mimes:pdf,jpg,png|max:2048',
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json(['errors' => $e->errors()], 422);
        }

        // Step 2: Handle optional file uploads
        $filePaths = [];
        $fileKeys = ['nid_file', 'tin_file', 'symbol_file', 'other_file'];

        foreach ($fileKeys as $fileKey) {
            if ($request->hasFile($fileKey)) {
                $newFileName = 'nomination_' . $fileKey . '_' . time() . '.' . $request->file($fileKey)->getClientOriginalExtension();
                $filePath = 'documents/' . $newFileName;

                try {
                    $request->file($fileKey)->storeAs('documents', $newFileName, 'public');
                    $filePaths[$fileKey] = $filePath;
                } catch (\Exception $e) {
                    return response()->json(['error' => "File Upload Error ($fileKey): " . $e->getMessage()], 500);
                }
            }
        }

        // Step 3: Save to database (optional fields included)
        try {
            $nomination = Nomination::create(array_merge($validatedData, $filePaths));
        } catch (\Exception $e) {
            return response()->json(['error' => 'Database Save Error: ' . $e->getMessage()], 500);
        }

        // Step 4: Return success response
        return response()->json([
            'message' => 'Form submitted successfully!',
            'data' => $validatedData,
            'file_paths' => $filePaths,
        ]);
    }
}
