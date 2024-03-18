<?php
return [
    "plugin" => [
        "description" => "Un semplice slider/carousel leggero, flessibile e accessibile. ",
        "id" => "id",
        "name" => "Slider",
        "slideshows" => "Caroselli",
        "title" => "Titolo"
    ],
    "slider" => [
        "aria_label" => "Attributo aria-label",
        "aria_label_desc" => "Imposta un attributo aria-label all'elemento radice. Questa opzione sovrascrive l'attributo definito dall'HTML.",
        "aria_labelledby" => "Attributo aria-labelledby",
        "aria_labelledby_desc" => "Imposta un attributo aria-labelledby all'elemento radice. Questa opzione sovrascrive l'attributo definito da HTML.",
        "arrow_path" => "Percorso svg freccia",
        "arrow_path_desc" => "Modifica il percorso SVG della freccia, come 'm7.61 0.807-2.12...'. Le dimensioni dell'SVG devono essere 40×40.",
        "arrow_path_desc2" => "m7.61 0.807-2.12...",
        "arrows" => "Frecce",
        "arrows_desc" => "Determina se creare o meno le frecce. Questa opzione deve essere ancora vera se si forniscono frecce in HTML.",
        "auto_height" => "Altezza automatica",
        "auto_height_desc" => "Se vero, l'altezza delle diapositive è determinata dalla loro altezza. Non fornire le opzioni perPage e perMove (oppure impostarle a 1)",
        "auto_width" => "Larghezza automatica",
        "auto_width_desc" => "Se vero, la larghezza delle diapositive è determinata dalla loro larghezza. Non fornire le opzioni perPage e perMove (oppure impostarle a 1)",
        "autoplay" => "Auto Play",
        "autoplay_desc" => "Avvia automaticamente lo scorrimento delle diapositive",
        "clone_status" => "Determina se aggiungere o meno la classe is-active ai cloni.",
        "clone_status_desc" => "Determina se aggiungere o meno la classe is-active ai cloni.",
        "clones" => "Specifica il numero di cloni su ciascun lato del carosello di loop.",
        "clones_desc" => "Specifica il numero di cloni su ciascun lato del carosello di loop.",
        "cover" => "Copertina",
        "cover_desc" => "Converte l'immagine src nell'URL css background-image dell'elemento genitore. Richiede l'opzione height, fixedHeight o heightRatio.",
        "destroy" => "Distruggi",
        "destroy_desc" => "Distrugge il carosello.",
        "drag" => "Trascinamento",
        "drag_desc" => "Determina se consentire o meno all'utente di trascinare il carosello.",
        "drag_min_treshold" => "Minima soglia di trascinamento",
        "drag_min_treshold_desc" => "La distanza necessaria per iniziare a muovere il carosello tramite l'azione tattile. Se si desidera impostare la soglia anche per il mouse, fornire un oggetto.",
        "drag_min_treshold_desc2" => "number | { mouse: number, touch: number } = 10",
        "easing" => "Easing",
        "easing_desc" => "La funzione di temporizzazione per la transizione CSS, come linear, ease o cubic-bezier().",
        "easing_desc2" => "string = cubic-bezier(0.25, 1, 0.5, 1)",
        "easing_func" => "Funzione di Easing",
        "easing_func_desc" => "La funzione di easing per la modalità senza trascinamento.",
        "easing_func_desc2" => "( t: number ) => number = t => 1 - Math.pow( 1 - t, 4 )",
        "fixed_height" => "Altezza fissa",
        "fixed_height_desc" => "Fissa l'altezza delle diapositive, accettando il formato CSS tranne %. Il carosello ignorerà le opzioni perPage, height e heightRatio se si fornisce questo valore.",
        "fixed_width" => "Larghezza fissa",
        "fixed_width_desc" => "Fissa la larghezza delle diapositive, accettando il formato CSS. Il carosello ignorerà l'opzione perPage se si fornisce questo valore.",
        "flick_max_pages" => "Flick max pages",
        "flick_max_pages_desk" => "Limita il numero di pagine da spostare con l'azione di scorrimento.",
        "flick_power" => "Flick power",
        "flick_power_desc" => "Determinare la potenza di \"flick\". Maggiore è questo numero, maggiore è la distanza percorsa dal carousel. Si consiglia un valore di circa 500.",
        "focus" => "Focus",
        "focus_desc" => "Determina quale diapositiva deve essere attiva se il carosello ha più diapositive in una pagina. ",
        "focus_desc2" => "numero | 'center'",
        "gap" => "Spazio",
        "gap_desc" => "",
        "gap_desc2" => "",
        "height" => "Altezza",
        "height_desc" => "Definisce l'altezza della diapositiva, accettando il formato CSS tranne %",
        "height_ratio" => "Rapporto di altezza",
        "height_ratio_desc" => "Determina l'altezza delle diapositive in base al rapporto con la larghezza del carosello. Per esempio, se la larghezza del carosello è 1000 e il rapporto è 0,3, l'altezza sarà 300. Si noti che Splide ignora questa opzione quando viene fornita l'opzione height o fixedHeight.",
        "image_horizontal_position" => "Posizionamento orizzontale",
        "image_position" => "Posizione immagine",
        "interval" => "Intervallo",
        "interval_desc" => "La durata dell'intervallo di riproduzione automatica in millisecondi. Usare l'attributo data-splide-interval per sovrascrivere questo valore per la diapositiva specifica.",
        "is_navigation" => "è navigazione?",
        "is_navigation_desc" => "Se vero, il carosello rende le diapositive cliccabili per navigare in un altro carosello.",
        "lazy_load" => "Lazy load",
        "lazy_load_desc" => "Abilita il caricamento \"pigro\".",
        "lazy_load_false" => "Nessuno",
        "lazy_load_nearby" => "Vicine",
        "lazy_load_sequential" => "Sequenziale",
        "live" => "Live",
        "live_desc" => "Abilita una regione live, se isNavigatio è attiva, splide non l'attiva.",
        "no_drag" => "Non trascinare",
        "no_drag_desc" => "Il selettore per i nodi che non possono essere trascinati.",
        "no_drag_desc2" => "es. input, textarea, .no-drag",
        "omit_end" => "Ometti fine",
        "omit_end_desc" => "Disattiva la freccia successiva quando il carosello raggiunge l'ultima pagina e omette i punti di paginazione ridondanti.",
        "padding" => "Padding",
        "padding_desc" => "Imposta il padding a sinistra/destra per il carosello orizzontale o in alto/basso per il carosello verticale. Fornire un singolo valore per impostare la stessa dimensione per entrambi o un oggetto letterale per dimensioni diverse. Il formato CSS è accettabile, ad esempio 1em.",
        "padding_desc2" => "padding: number | string | { left?: number | string, right?: number | string } | { top?: number | string, bottom?: number | string }",
        "pagination" => "Paginazione",
        "pagination_desc" => "Determina se creare o meno la paginazione (punti indicatori).",
        "pagination_direction" => "Direzione paginazione",
        "pagination_direction_desc" => "Imposta esplicitamente la direzione di paginazione che non influisce solo sull'aspetto, ma anche sulle scorciatoie e sugli attributi ARIA. Il valore predefinito è determinato dalla direzione del carosello.",
        "pagination_direction_ltr" => "Da sinistra a destra",
        "pagination_direction_rtl" => "Da destr5a a sinistra",
        "pagination_direction_ttb" => "Dall'alto verso il basso",
        "pagination_keyboard" => "Paginazione da tastiera",
        "pagination_keyboard_desc" => "Determina se abilitare le scorciatoie da tastiera per la paginazione quando contiene il focus. È necessario per il W3C Carousel Design Pattern.",
        "pause_on_focus" => "Pausa su focus",
        "pause_on_focus_desc" => "Determina se mettere in pausa la riproduzione automatica quando il carosello contiene un elemento focalizzato o meno.",
        "pause_on_hover" => "Pausa su hover",
        "pause_on_hover_desc" => "Determina se mettere in pausa l'autoplay al passaggio del mouse o meno.",
        "per_move" => "Per mossa",
        "per_move_desc" => "Determina il numero di diapositive da spostare contemporaneamente. L'esempio seguente visualizza 3 diapositive per pagina, ma le sposta una alla volta. Il valore deve essere un numero intero.",
        "per_page" => "Per pagina",
        "per_page_desc" => "Determina il numero di diapositive da visualizzare in una pagina. Il valore deve essere un numero intero.",
        "position_x" => "Posizionamento Orizzontale",
        "position_x_desc" => "top|middle|bottom| %",
        "position_y" => "Posizionamento Verticale",
        "position_y_desc" => "top|middle|bottom| %",
        "preload_pages" => "Precarica pagine",
        "preload_pages_desc" => "Determina quante pagine (non diapositive) intorno alla diapositiva attiva devono essere caricate in anticipo. Funziona solo quando l'opzione lazyLoad è \"vicino\".",
        "release_wheel" => "Rilascia rotella",
        "release_wheel_desc" => "Determina se rilasciare l'evento ruotella quando il carosello raggiunge la prima o l'ultima diapositiva",
        "reset_progress" => "Resetta progresso",
        "reset_progress_desc" => "Determina se ripristinare l'avanzamento dell'autoplay quando viene richiesto di ricominciare.",
        "rewind" => "Riavvolgi",
        "rewind_by_drag" => "Rewind by drag",
        "rewind_by_drag_desc" => "Consente agli utenti di riavvolgere un carosello per trascinamento. L'opzione di rewind deve essere vera.",
        "rewind_desc" => "Determina se riavvolgere o meno il carosello. Non funziona in modalità loop.",
        "rewind_speed" => "Velocità riavvolgimento",
        "rewind_speed_desc" => "La velocità di riavvolgimento in millisecondi. Il valore della velocità viene utilizzato come valore predefinito.",
        "role" => "Attributo role",
        "role_desc" => "Imposta un attributo di ruolo all'elemento radice. Deve essere un ruolo o un gruppo di riferimento. Per evitare che Splide assegni il valore predefinito (regione), passare una stringa vuota o undefined.",
        "settings" => "Impostazioni",
        "slide_description" => "Descrizione",
        "slide_image" => "Immagine",
        "slide_link" => "Link",
        "slide_title" => "Titolo immagine",
        "slidefocus" => "Focus visibile",
        "slidefocus_desc" => "Determina se aggiungere tabindex=\"0\" alle diapositive visibili o meno.",
        "slides" => "Diapositive",
        "snap" => "Aggancio",
        "snap_desc" => "Aggancia la diapositiva più vicina nella modalità senza trascinamento.",
        "speed" => "Velocità",
        "speed_desc" => "Velocità di transizione in millisecondi. Se 0, il carosello salta immediatamente alla diapositiva di destinazione.",
        "start" => "Avvio",
        "start_desc" => "L'indice di partenza",
        "title" => "Titolo",
        "toggle_options" => "Opzioni",
        "trim_space" => "Ritaglia spazio",
        "trim_space_desc" => "Determina se tagliare gli spazi prima/dopo il carosello se è disponibile l'opzione di messa a fuoco.",
        "type" => "Tipo",
        "type_desc" => "Il tipo di carosello",
        "update_on_move" => "Aggiorna prima di spostare",
        "update_on_move_desc" => "Aggiorna lo stato \"is-active\" delle diapositive prima di spostare il carosello.",
        "wait_for_transition" => "Attendi transizione",
        "wait_for_transition_desc" => "Determina se disabilitare qualsiasi azione durante la transizione del carosello.",
        "wheel" => "Rotella",
        "wheel_desc" => "Consente la navigazione con la rotellina del mouse",
        "width" => "Larghezza",
        "width_desc" => "Definisce la larghezza massima del carosello, accettando il formato CSS come 10em, 80vw. L'esempio seguente imposta la larghezza del carosello all'80%."
    ]
];
