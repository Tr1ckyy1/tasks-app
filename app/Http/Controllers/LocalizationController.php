<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;

class LocalizationController extends Controller
{
	public function __invoke($locale): RedirectResponse
	{
		if (!in_array($locale, ['en', 'ka'])) {
			abort(400);
		}

		session(['localization' => $locale]);

		return back();
	}
}
