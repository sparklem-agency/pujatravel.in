<?php


use Pecee\Http\Url;
use Pecee\Http\Request;
use Pecee\Http\Response;
use Jenssegers\Blade\Blade;
use Pecee\SimpleRouter\SimpleRouter as Router;



function dd($data)
{

    echo '<pre style="background-color:black;color:white">';

    var_dump($data);


    echo '</pre>';
}




function view(string $view, array $data = []): string
{
    $blade = new Blade(__DIR__ . '/views', __DIR__ . '/storage/cache');

    return  $blade->render($view, $data);
}

/**
 * Get url for a route by using either name/alias, class or method name.
 *
 * The name parameter supports the following values:
 * - Route name
 * - Controller/resource name (with or without method)
 * - Controller class name
 *
 * When searching for controller/resource by name, you can use this syntax "route.name@method".
 * You can also use the same syntax when searching for a specific controller-class "MyController@home".
 * If no arguments is specified, it will return the url for the current loaded route.
 *
 * @param string|null $name
 * @param string|array|null $parameters
 * @param array|null $getParams
 * @return \Pecee\Http\Url
 * @throws \InvalidArgumentException
 */
function route(?string $name = null, $parameters = null, ?array $getParams = null): Url
{
    return Router::getUrl($name, $parameters, $getParams);
}

/**
 * @return \Pecee\Http\Response
 */
function response(): Response
{
    return Router::response();
}

/**
 * @return \Pecee\Http\Request
 */
function request(): Request
{
    return Router::request();
}

/**
 * Get input class
 * @param string|null $index Parameter index name
 * @param string|mixed|null $defaultValue Default return value
 * @param array ...$methods Default methods
 * @return \Pecee\Http\Input\InputHandler|array|string|null
 */
function input($index = null, $defaultValue = null, ...$methods)
{
    if ($index !== null) {
        return request()->getInputHandler()->value($index, $defaultValue, ...$methods);
    }

    return request()->getInputHandler();
}

/**
 * @param string $url
 * @param int|null $code
 */
function redirect(string $url, ?int $code = null): void
{
    if ($code !== null) {
        response()->httpCode($code);
    }

    response()->redirect($url);
}

/**
 * Get current csrf-token
 * @return string|null
 */
function csrf_token(): ?string
{
    $baseVerifier = Router::router()->getCsrfVerifier();
    if ($baseVerifier !== null) {
        return $baseVerifier->getTokenProvider()->getToken();
    }

    return null;
}


function url(string $path): string
{
    return (str_starts_with($path, '/') ? '' : '/') . $path;
}

function image_asset(string $string): string
{
    return url('/public/images' . (str_starts_with($string, '/') ? '' : '/') . $string);
}

function all_packages()
{
    $directory = __DIR__ . '/packages';

    // Initialize the array to store the data
    $filesArray = [];

    // Scan the directory for .md files
    foreach (glob($directory . '/*.md') as $filePath) {
        // Extract the filename without the path and extension
        $filename = basename($filePath, '.md');

        // Read the content of the file
        $content = file_get_contents($filePath);

        // Remove lines with '--'
        $content = preg_replace('/^--.*$/m', '', $content);

        // Extract metadata (e.g., price, location, etc.)
        $data = [];
        preg_match_all('/^(\w+):\s*(.+)$/m', $content, $matches, PREG_SET_ORDER);
        foreach ($matches as $match) {
            $key = strtolower($match[1]);
            $value = trim($match[2]);

            // Check if the value is a comma-separated list and split it
            if ($key == 'location') {
                $value = array_map('trim', explode(',', $value)); // Split and trim each value
            }

            $data[$key] = $value;

            // Remove the metadata from the content
            $content = preg_replace("/^" . preg_quote($match[0], '/') . "\s*$/m", '', $content);
        }

        // Generate the array entry
        $filesArray[$filename] = [
            'name' => str_replace('-', ' ', $filename),
            'slug' => $filename,
            'details' => trim($content),  // Remove metadata and trim the content
            'data' => $data, // Metadata extracted from the content
        ];
    }
    return $filesArray;
}


function find_package($slug)
{
    $packages = all_packages();

    // Check if the package exists and return it
    if (isset($packages[$slug])) {
        return $packages[$slug];
    }

    // Return a message if not found
    return null;
}

function abort(int $code, string $message = '')
{
    Router::response()->httpCode(404);
    return view('errors.layout', compact('message', 'code'));
}

function markdown(string $string): string
{

    $Parsedown = new Parsedown();

    return $Parsedown->text($string);
}
