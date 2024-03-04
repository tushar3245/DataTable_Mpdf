<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TaskModel;
use App\Models\User;
use Mpdf\Mpdf;
use DB;

class PdfController extends Controller
{
   

    public function generatePdf($id)
    {
       
        // Retrieve user from the database based on the provided ID
        $user = DB::table('task_models')
            ->rightJoin('users', 'users.id', '=', 'task_models.user_id')
            ->select('task_models.*', 'users.id as uid', 'users.name', 'users.email')
            ->where('users.id', $id)
            ->first();
    
        // Check if the user is retrieved successfully
        if (!$user) {
            // Handle the case where the user is not found
            return response()->json(['message' => 'User not found'], 404);
        }
    
        // Pass user data to view
        $data = [
            'user' => $user
        ];
    
        // Render view to HTML content
        $htmlContent = view('pdf.user_details', $data)->render();
    
        // Generate PDF
        $mpdf = new Mpdf();
        $mpdf->WriteHTML($htmlContent);
    
        // Output PDF to the browser
        $mpdf->Output('user_details.pdf', 'D');
    }
    
    }
    

