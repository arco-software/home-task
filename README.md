# Readme

## Currency Convertr
A simple but adaptable currency conversion application

<img width="1596" height="1174" alt="screencapture-localhost-8000-2026-02-13-12_22_45" src="https://github.com/user-attachments/assets/87ba2665-090d-455e-af6a-d903cc46d087" />

## Build

### Starter Kit

This was built on the NuxtUI/Laravel starter kit which can be found at [jkque/laravel-nuxt-ui-starter-kit](https://github.com/jkque/laravel-nuxt-ui-starter-kit) for ease of building out a pleasant, user friendly UI quickly.  I stripped it down to remove a lot of the bits and bobs which I wasn't going to use (auth, etc.) and removed the templated frontend.

### Premise

This is an application which on the face of it is very simple, yet has the potential to grow with the business constraints of the company who own it: The API which you use for the currency conversions is easily interchangeable. To use an API other than the configured [Fixer API](https://fixer.io/), create another `CurrencyConversionDriver` compliant "driver" and set your preffered currency conversion driver in your `.env` file as you would with database driver, cache driver, session driver etc.

### UI

Feedback to the user is important. This application uses both client-side and server-side validation, and is configured to display any non-form-validaton error messages to the user in neat little toasts at the bottom of the screen.

<img width="1596" height="1174" alt="screencapture-localhost-8000-2026-02-13-12_24_00" src="https://github.com/user-attachments/assets/0fd7dccb-2104-4c2f-b29c-c89290a39a93" />
<img width="791" height="581" alt="Screenshot 2026-02-13 at 12 23 49" src="https://github.com/user-attachments/assets/3cb6a2b2-e92c-47a0-bb49-6e1530385703" />

