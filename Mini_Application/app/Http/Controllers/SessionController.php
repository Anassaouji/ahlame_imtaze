// app/Http/Controllers/SessionController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function store(Request $request)
    {
        $request->session()->put('key', 'value');
        return response()->json(['message' => 'Session stored']);
    }

    public function get(Request $request)
    {
        $value = $request->session()->get('key');
        return response()->json(['key' => $value]);
    }

    public function delete(Request $request)
    {
        $request->session()->forget('key');
        return response()->json(['message' => 'Session key deleted']);
    }
}
