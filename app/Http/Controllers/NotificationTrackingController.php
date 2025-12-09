<?php
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> 82ae73be (.)
=======

>>>>>>> d09cb759 (.)
=======

>>>>>>> 82ae73be (.)
=======

>>>>>>> d09cb759 (.)
=======

>>>>>>> 82ae73be (.)
=======

>>>>>>> d09cb759 (.)
=======

=======
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======

>>>>>>> 2fc60436 (.)
=======

>>>>>>> 82ae73be (.)
=======

>>>>>>> d09cb759 (.)
=======

=======
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
declare(strict_types=1);

namespace Modules\Notify\Http\Controllers;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use function Safe\base64_decode;

=======
=======
>>>>>>> f1c9518b (.)
=======
use function Safe\base64_decode;

>>>>>>> 99ff506 (.)
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
=======
>>>>>>> f1c9518b (.)
use Illuminate\Http\RedirectResponse;
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> 2fc60436 (.)
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

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> f1c9518b (.)
use function Safe\base64_decode;

=======
>>>>>>> 99ff506 (.)
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> f1c9518b (.)
class NotificationTrackingController extends Controller
{
    /**
     * Traccia l'apertura di una notifica.
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> f1c9518b (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> f1c9518b (.)
     *
     * @param Request $request
     * @param string $id
     * @return Response
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     *
     * @param Request $request
     * @param string $id
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @return RedirectResponse
=======
     * @return \Illuminate\Http\RedirectResponse
>>>>>>> a404ea71 (.)
=======
     * @return \Illuminate\Http\RedirectResponse
>>>>>>> a404ea71 (.)
=======
     * @return \Illuminate\Http\RedirectResponse
>>>>>>> a404ea71 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> f1c9518b (.)
=======
     *
     * @param Request $request
     * @param string $id
<<<<<<< HEAD
<<<<<<< HEAD
     * @return RedirectResponse
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
     * @return \Illuminate\Http\RedirectResponse
>>>>>>> a404ea71 (.)
=======
     * @return RedirectResponse
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
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
=======
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
     *
     * @param Request $request
     * @param string $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function trackClick(Request $request, string $id): \Illuminate\Http\RedirectResponse
    {
        $log = NotificationLog::find($id);
<<<<<<< HEAD
        $url = $request->get('url');
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2fc60436 (.)
=======
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            $metadata = $log->data ?? [];
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
            $metadata = $log->metadata ?? [];
>>>>>>> 82ae73be (.)
=======
            $metadata = $log->metadata ?? [];
>>>>>>> d09cb759 (.)
=======
            $metadata = $log->data ?? [];
>>>>>>> 3f537838 (.)
=======
            $metadata = $log->metadata ?? [];
>>>>>>> 82ae73be (.)
=======
            $metadata = $log->metadata ?? [];
>>>>>>> d09cb759 (.)
=======
            $metadata = $log->data ?? [];
>>>>>>> 3f537838 (.)
=======
            $metadata = $log->metadata ?? [];
>>>>>>> 82ae73be (.)
=======
            $metadata = $log->metadata ?? [];
>>>>>>> d09cb759 (.)
=======
            $metadata = $log->data ?? [];
>>>>>>> 3f537838 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 54220b28 (rebase 210)
=======
            $metadata = $log->metadata ?? [];
>>>>>>> 2fc60436 (.)
=======
            $metadata = $log->metadata ?? [];
>>>>>>> 82ae73be (.)
=======
            $metadata = $log->metadata ?? [];
>>>>>>> d09cb759 (.)
=======
            $metadata = $log->data ?? [];
>>>>>>> 3f537838 (.)
=======
>>>>>>> 5fd545e4 (.)
            $metadata['clicked_links'] = array_merge(
                $metadata['clicked_links'] ?? [],
                [$url => now()->toIso8601String()]
            );
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
            $log->update(['metadata' => $metadata]);
        }

        // Redirect all'URL originale
        return redirect()->away($url);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
            $log->update(['data' => $metadata]);
        }

        // Redirect all'URL originale
        return redirect()->away((string) $url);
>>>>>>> 3f537838 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
            $log->update(['data' => $metadata]);
        }

        // Redirect all'URL originale
        return redirect()->away((string) $url);
>>>>>>> 3f537838 (.)
=======
            $log->update(['data' => $metadata]);
        }

        // Redirect all'URL originale
        return redirect()->away((string) $url);
>>>>>>> 3f537838 (.)
    }
<<<<<<< HEAD
<<<<<<< HEAD
} 
=======
<<<<<<< HEAD
=======
>>>>>>> f1c9518b (.)
}
=======
} 
>>>>>>> 99ff506 (.)
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
=======
    }
} 
>>>>>>> 2fc60436 (.)
=======
    }
} 
>>>>>>> 82ae73be (.)
=======
    }
} 
>>>>>>> d09cb759 (.)
=======
>>>>>>> f1c9518b (.)
