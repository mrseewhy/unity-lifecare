<?php

namespace App\Http\Controllers;

use App\Models\SubmittedFormData;
use Illuminate\Support\Facades\Storage;

class RegistrationDocumentDownloadController extends Controller
{
    public function __invoke(SubmittedFormData $submission)
    {
        $formData = $submission->form_data;
        $path = $formData['supporting_document_path'] ?? null;

        abort_unless($path && Storage::disk('local')->exists($path), 404);

        return Storage::disk('local')->download(
            $path,
            $formData['supporting_document_original_name'] ?? basename($path),
        );
    }
}
