<?php
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> 82ae73be (.)
=======

>>>>>>> d09cb759 (.)
declare(strict_types=1);

namespace Modules\Notify\Http\Controllers;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use function Safe\base64_decode;

use Illuminate\Http\RedirectResponse;
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> a404ea71 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @return RedirectResponse
=======
     * @return \Illuminate\Http\RedirectResponse
>>>>>>> a404ea71 (.)
     */
    public function trackClick(Request $request, string $id): \Illuminate\Http\RedirectResponse
    {
        $log = NotificationLog::find($id);
        $url = $request->get('url', '');
=======
=======
>>>>>>> d09cb759 (.)
     * @return Response
=======
     * @return \Illuminate\Http\RedirectResponse
>>>>>>> 3f537838 (.)
     */
    public function trackClick(Request $request, string $id): \Illuminate\Http\RedirectResponse
    {
        $log = NotificationLog::find($id);
<<<<<<< HEAD
        $url = $request->get('url');
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
        $url = $request->get('url', '');
>>>>>>> 3f537838 (.)

        if ($log) {
            $log->markAsClicked();

            // Aggiorna i metadati con il link cliccato
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            $metadata = $log->data ?? [];
=======
            $metadata = $log->metadata ?? [];
>>>>>>> 82ae73be (.)
=======
            $metadata = $log->metadata ?? [];
>>>>>>> d09cb759 (.)
=======
            $metadata = $log->data ?? [];
>>>>>>> 3f537838 (.)
            $metadata['clicked_links'] = array_merge(
                $metadata['clicked_links'] ?? [],
                [$url => now()->toIso8601String()]
            );
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            $log->update(['data' => $metadata]);
        }

        // Redirect all'URL originale
        return redirect()->away((string) $url);
=======
=======
>>>>>>> d09cb759 (.)
            $log->update(['metadata' => $metadata]);
        }

        // Redirect all'URL originale
        return redirect()->away($url);
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
            $log->update(['data' => $metadata]);
        }

        // Redirect all'URL originale
        return redirect()->away((string) $url);
>>>>>>> 3f537838 (.)
    }
} 