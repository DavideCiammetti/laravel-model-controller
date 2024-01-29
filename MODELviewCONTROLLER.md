# INIZIALIZZARE CONNESSIONE TRA MODEL VIEW E CONTROLLER 

view--------------->controller 

view--> in view al momento ho solo il file welcome.blade.phpche è collegato tramite route nel file web.php in routes/directory ma collegando il controller al view questo cambia come:?

1) in **app/http/controllers** creare una nuova cratella Guest con all'interno il file PageController.php   (sempre al singolare con la prima lett maiuscola) 
2) nel nuovo file creato (PageController.php) creiamo un funzione **public function index(){}, il nome di questa funzione può anche essere diverso da index() ma è buona prassi usare questo.
3) all'interno di questa funzone appena creata andiamo ad inserire  **return view('welcome');-----> non è altri che il return che avevamo all'interno del file web.php nella cartella routes, quindi abbiamo spostato la logica in  CONTROLLERS e avremo quindi:

        class PageController extends Controller-----> la nostra classe che viene estesa dalla classe Controller 
        {
            public function index(){
                
                return view('welcome');----> (WELCOME.BLADE.PHP)
            }
        }
4) in routers andiamo nel file web.php e scriviamo---> **Route::get('/', [PageController::class, 'index']);** che rappresenta il collegamento con il controller da ricordare che bisogna importare ---->***use App\Http\Controllers\Guest\PageController;

5) ora abbiamo la view e il controller che sono collegati, ma adesso dobbiamo fare 2 azioni:---> PRENDERE DATI DAL DB CON IL MODEL, E COLLEGARE IL MODEL AL CONTROLLER

    -  ANDIAMO NEL FILE .ENV e modifichiamo alcuni dei valori per collegare il nostro db.
    quinid modifichiamo la password, la porta del server se necessario, e soprattutto la voce {**DB_DATABASE**} cioe il NOME DEL DB.
    - in fine dobbiamo creare un file in Models che si trova in app/Models e creiamo il file che in questo caso chiameremo Movie.php e una volta creato avremo:

        class Movie extends Model{
                use HasFactory;
            }
6) collegamento tra il file movie.php e il controller quindi PageController.
Proprio in PageController usiamo---> use App\Models\Movie; e all'interno della classe creata prima inseriamo --->**$movie = Movie::all();

    class PageController extends Controller
    {
        public function index(){
            $movie = Movie::all(); ---> questo rappresenta la nostra query che ci permette di prendere tutti gli elementi del db 
            dd($movie);
            return view('welcome');
        }
    }

## passare i dati a welcome.blade.php


  class PageController extends Controller
    {
        public function index(){
            $movie = Movie::all(); ---> questo rappresenta la nostra query che ci permette di prendere tutti gli elementi del db 
            $data = [
                'movie' => $movie,
            ];
            return view('welcome', $data);---> o altrimenti usiamo la funzione compact('movie')
        }
    }