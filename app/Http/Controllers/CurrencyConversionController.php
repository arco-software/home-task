<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\RateLimiter;
use App\Http\Requests\CurrencyConversionRequest;
use App\Repositories\CurrencyConversion\CurrencyConverter;

class CurrencyConversionController extends Controller
{
    public function __invoke(CurrencyConversionRequest $request): array
    {

        $currencyConverter = new CurrencyConverter(
            $request->float('amount'),
            $request->get('fromCurrency'),
            $request->get('toCurrency')
        );

        return $currencyConverter->convert();
    }
}
