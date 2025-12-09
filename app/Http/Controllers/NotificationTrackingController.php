<?php
<<<<<<< HEAD
=======

>>>>>>> 82ae73be (.)
declare(strict_types=1);

namespace Modules\Notify\Http\Controllers;

<<<<<<< HEAD
use function Safe\base64_decode;

use Illuminate\Http\RedirectResponse;
=======
>>>>>>> 82ae73be (.)
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Notify\Models\NotificationLog;

class NotificationTrackingController extends Controller
{
    /**
     * Traccia l'apertura di una notifica.
     *
     * @param Request $request
     * @param string $id
     * @return Response
     */
    public function trackOpen(Request $request, string $id): Response
    {
        $log = NotificationLog::find($id);

        if ($log) {
            $log->markAsOpened();
        }

        // Restituisce un'immagine trasparente 1x1
        return response()->make(
            base64_decode('R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7'),
            200,
            ['Content-Type' => 'image/gif']
        );
    }

    /**
     * Traccia il click su un link in una notifica.
     *
     * @param Request $request
     * @param string $id
<<<<<<< HEAD
     * @return RedirectResponse
     */
    public function trackClick(Request $request, string $id): RedirectResponse
    {
        $log = NotificationLog::find($id);
        $url = $request->get('url', '');
=======
     * @return Response
     */
    public function trackClick(Request $request, string $id): Response
    {
        $log = NotificationLog::find($id);
        $url = $request->get('url');
>>>>>>> 82ae73be (.)

        if ($log) {
            $log->markAsClicked();

            // Aggiorna i metadati con il link cliccato
<<<<<<< HEAD
            $metadata = $log->data ?? [];
=======
            $metadata = $log->metadata ?? [];
>>>>>>> 82ae73be (.)
            $metadata['clicked_links'] = array_merge(
                $metadata['clicked_links'] ?? [],
                [$url => now()->toIso8601String()]
            );
<<<<<<< HEAD
            $log->update(['data' => $metadata]);
        }

        // Redirect all'URL originale
        return redirect()->away((string) $url);
=======
            $log->update(['metadata' => $metadata]);
        }

        // Redirect all'URL originale
        return redirect()->away($url);
>>>>>>> 82ae73be (.)
    }
} 