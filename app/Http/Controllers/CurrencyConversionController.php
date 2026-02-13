<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\RateLimiter;
use App\Http\Requests\CurrencyConversionRequest;
use App\Repositories\CurrencyConversion\CurrencyConverter;

class CurrencyConversionController extends Controller
{
    public function __invoke(CurrencyConversionRequest $request): array
    {
        $rateLimiterKey = sprintf('address-validation:%s', $request->ip());

        if (RateLimiter::tooManyAttempts($rateLimiterKey, 10)) {
            report(new \Exception("Someone is spamming the endpoint: {$rateLimiterKey}"));
            abort(429);
        }

        RateLimiter::increment($rateLimiterKey, 60);

        $currencyConverter = new CurrencyConverter(
            $request->float('amount'),
            $request->get('fromCurrency'),
            $request->get('toCurrency')
        );

        return $currencyConverter->convert();
    }
}
