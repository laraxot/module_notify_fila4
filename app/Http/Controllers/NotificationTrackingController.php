<?php
<<<<<<< HEAD

=======
<<<<<<< HEAD
=======

>>>>>>> b8140d8 (.)
>>>>>>> f6b0523 (.)
declare(strict_types=1);

namespace Modules\Notify\Http\Controllers;

<<<<<<< HEAD
=======
<<<<<<< HEAD
use function Safe\base64_decode;

>>>>>>> f6b0523 (.)
use Illuminate\Http\RedirectResponse;
=======
>>>>>>> b8140d8 (.)
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Arr;
use Modules\Notify\Models\NotificationLog;

use function Safe\base64_decode;

class NotificationTrackingController extends Controller
{
    /**
     * Traccia l'apertura di una notifica.
     */
    public function trackOpen(Request $request, string $id): Response
    {
        $log = NotificationLog::query()->find($id);

        if ($log instanceof NotificationLog) {
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
>>>>>>> f6b0523 (.)
     */
    public function trackClick(Request $request, string $id): RedirectResponse
=======
     * @return \Illuminate\Http\RedirectResponse
     */
    public function trackClick(Request $request, string $id): \Illuminate\Http\RedirectResponse
>>>>>>> b8140d8 (.)
    {
        $log = NotificationLog::query()->find($id);
        $url = $request->get('url', '');

        if ($log instanceof NotificationLog) {
            $log->markAsClicked();

            $metadata = $log->data ?? [];
            if (! is_array($metadata)) {
                $metadata = [];
            }

<<<<<<< HEAD
            $clickedLinks = Arr::get($metadata, 'clicked_links', []);
            if (! is_array($clickedLinks)) {
                $clickedLinks = [];
            }

            $urlStr = is_string($url) ? $url : (string) $url;

            $metadata['clicked_links'] = array_merge($clickedLinks, [$urlStr => now()->toIso8601String()]);

            $log->update(['data' => $metadata]);
=======
            $clickedLinks = isset($metadata['clicked_links']) && is_array($metadata['clicked_links']) ? $metadata['clicked_links'] : [];
            $urlStr = is_string($url) ? $url : (string) $url;

            /** @var array<string, mixed> $safeMetadata */
            $safeMetadata = $metadata;
            $safeMetadata['clicked_links'] = array_merge($clickedLinks, [$urlStr => now()->toIso8601String()]);

            $log->update(['data' => $safeMetadata]);
>>>>>>> 6ba141fc (.)
        }

        // Redirect all'URL originale
        return redirect()->away((string) $url);
    }
}
