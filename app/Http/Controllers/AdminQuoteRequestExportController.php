<?php

namespace App\Http\Controllers;

use App\Models\QuoteRequest;
use Symfony\Component\HttpFoundation\StreamedResponse;

class AdminQuoteRequestExportController extends Controller
{
    public function __invoke(): StreamedResponse
    {
        $filename = 'demandes-devis-'.now()->format('Y-m-d').'.csv';

        return response()->streamDownload(function () {
            $handle = fopen('php://output', 'w');

            fputcsv($handle, [
                'Date',
                'Nom',
                'Email',
                'Telephone',
                'Entreprise',
                'Pack',
                'Projet',
                'Budget',
                'Statut',
                'Montant estime',
                'Relance',
                'Besoins',
            ]);

            QuoteRequest::latest()->chunk(200, function ($quotes) use ($handle) {
                foreach ($quotes as $quote) {
                    fputcsv($handle, [
                        $quote->created_at->format('Y-m-d H:i'),
                        $quote->name,
                        $quote->email,
                        $quote->phone,
                        $quote->company,
                        QuoteRequest::packs()[$quote->selected_pack] ?? '',
                        $quote->project_type_label,
                        $quote->budget_label,
                        $quote->status_label,
                        $quote->estimated_amount,
                        $quote->follow_up_at?->format('Y-m-d'),
                        $quote->needs,
                    ]);
                }
            });

            fclose($handle);
        }, $filename, [
            'Content-Type' => 'text/csv; charset=UTF-8',
        ]);
    }
}
