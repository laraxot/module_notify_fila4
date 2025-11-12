<?php
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 99ff506 (.)
=======
=======

>>>>>>> c454ecf (.)
>>>>>>> 1c89777 (.)
=======
>>>>>>> 1b51780 (.)
=======
=======

>>>>>>> b8140d8 (.)
>>>>>>> da89aab (.)
declare(strict_types=1);

namespace Modules\Notify\Http\Controllers;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> da89aab (.)
use function Safe\base64_decode;

>>>>>>> 99ff506 (.)
=======
use function Safe\base64_decode;

=======
>>>>>>> c454ecf (.)
>>>>>>> 1c89777 (.)
=======
use function Safe\base64_decode;

>>>>>>> 1b51780 (.)
use Illuminate\Http\RedirectResponse;
=======
>>>>>>> b8140d8 (.)
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Notify\Models\NotificationLog;

<<<<<<< HEAD
use function Safe\base64_decode;

=======
>>>>>>> 99ff506 (.)
class NotificationTrackingController extends Controller
{
    /**
     * Traccia l'apertura di una notifica.
<<<<<<< HEAD
=======
     *
     * @param Request $request
     * @param string $id
     * @return Response
>>>>>>> 99ff506 (.)
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
<<<<<<< HEAD
=======
     *
     * @param Request $request
     * @param string $id
<<<<<<< HEAD
     * @return RedirectResponse
>>>>>>> 99ff506 (.)
     */
    public function trackClick(Request $request, string $id): RedirectResponse
=======
     * @return \Illuminate\Http\RedirectResponse
     */
    public function trackClick(Request $request, string $id): \Illuminate\Http\RedirectResponse
>>>>>>> b8140d8 (.)
    {
        $log = NotificationLog::find($id);
        $url = $request->get('url', '');

        if ($log) {
            $log->markAsClicked();

            // Aggiorna i metadati con il link cliccato
            $metadata = $log->data ?? [];
            $metadata['clicked_links'] = array_merge(
                $metadata['clicked_links'] ?? [],
                [$url => now()->toIso8601String()]
            );
            $log->update(['data' => $metadata]);
        }

        // Redirect all'URL originale
        return redirect()->away((string) $url);
    }
<<<<<<< HEAD
}
=======
} 
>>>>>>> 99ff506 (.)
