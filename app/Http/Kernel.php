<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;
use RenatoMarinho\LaravelPageSpeed\Middleware;
class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * These middleware are run during every request to your application.
     *
     * @var array
     */
    protected $middleware = [
        \Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode::class,
        \Illuminate\Foundation\Http\Middleware\ValidatePostSize::class,
        \App\Http\Middleware\TrimStrings::class,
        \Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,
        \App\Http\Middleware\TrustProxies::class,
		//Middleware\CollapseWhitespace::class,
        //Middleware\CombineCss::class,
        //Middleware\CombineHeads::class,
        //Middleware\CombineJavascript::class,
        //Middleware\DedupInlinedImages::class,
        //Middleware\DeferJavascript::class,
        Middleware\ElideAttributes::class,
        //Middleware\ExtendCache::class,
        //Middleware\FallbackRewriteCssUrls::class.
        //Middleware\FlattenCssImports::class,
        //Middleware\HintPreloadSubresources::class,
        //Middleware\InlineCss::class,
        //Middleware\InLineGoogleFontCss::class,
        //Middleware\InLineImportToLink::class,
        //Middleware\InLineJavascript::class,
        //Middleware\InLinePreviewImages::class,
        Middleware\InsertDNSPrefetch::class,
        //Middleware\InsertGA::class,
        //Middleware\LazyLoadImages::class,
        //Middleware\LocalStorageCache::class,
        //Middleware\MakeGoogleAnalyticsAsync::class,
        //Middleware\MakeShowAdsAsync::class,
        //Middleware\MoveCssAboveScripts::class,
        //Middleware\MoveCssToHead::class,
        //Middleware\OutlineCss::class,
        //Middleware\OutlineJavascript::class,
        //Middleware\PageSpeed::class,
        //Middleware\PrioritizeCriticalCss::class,
        //Middleware\Pedantic::class,
        Middleware\RemoveComments::class,
        Middleware\RemoveQuotes::class,
        //Middleware\ResizeMobileImages::class,
        //Middleware\ResizeRenderedImageDimensions::class,
        //Middleware\ResponsiveImages::class,
        //Middleware\RewriteCss::class,
        //Middleware\RewriteImages::class,
        //Middleware\RewriteJavascript::class,
        //Middleware\RewriteStyleAttributes::class,
        //Middleware\RewriteStyleAttributesWithUrl::class,
        //Middleware\SpriteImages::class,
        //Middleware\TrimUrls::class,
    ];

    /**
     * The application's route middleware groups.
     *
     * @var array
     */
    protected $middlewareGroups = [
        'web' => [
            \App\Http\Middleware\EncryptCookies::class,
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            \Illuminate\Session\Middleware\StartSession::class,
            // \Illuminate\Session\Middleware\AuthenticateSession::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            \App\Http\Middleware\VerifyCsrfToken::class,
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],

        'api' => [
            'throttle:60,1',
            'bindings',
        ],
    ];

    /**
     * The application's route middleware.
     *
     * These middleware may be assigned to groups or used individually.
     *
     * @var array
     */
    protected $routeMiddleware = [
        'auth' => \Illuminate\Auth\Middleware\Authenticate::class,
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'bindings' => \Illuminate\Routing\Middleware\SubstituteBindings::class,
        'can' => \Illuminate\Auth\Middleware\Authorize::class,
        'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
        'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,
    ];
}
