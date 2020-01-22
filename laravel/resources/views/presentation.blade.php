@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Seisan-RP</title>

    </head>
    <body>
    <div class="container">
        <div class="row">
            <div class="col-sm border border-dark rounded mr-3 mt-4 text-center">
                <div class="h2 border-bottom border-dark mb-4 mt-2">Présentation du serveur</div>
                Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.
                <a href="{{route('presentation_serveur')}}" class="btn text-blue-light btn-outline-info btn-block btn-lg mx-auto mt-2 mb-3">Voir plus</a>

            </div>
            <div class="col-sm border border-dark rounded mr-3 mt-4 text-center">
                <div class="h2 border-bottom border-dark mb-4 mt-2">Règles du serveur</div>
                Praesent sagittis urna vitae nulla luctus elementum a non lorem. Phasellus egestas, magna ut hendrerit pulvinar, justo leo consequat metus, ut viverra est lorem eget nulla. In nec massa et purus cursus tempus. Nullam lacinia interdum placerat. Vestibulum quis malesuada ante. Phasellus vel dolor ut dolor vulputate molestie. Nullam dolor purus, mattis ac massa sed, venenatis congue metus. Integer accumsan leo in sapien aliquam accumsan. Aliquam a augue ac neque pretium feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer semper, dolor vitae porttitor malesuada, est metus commodo tortor, sit amet mollis arcu risus vel nisi. Nam ac blandit eros, vel dapibus dui. Ut sit amet pellentesque metus
                <a href="{{route('regles')}}" class="btn text-blue-light btn-outline-info btn-block btn-lg  mx-auto mt-2 mb-3">Voir plus</a>
            </div>
            <div class="col-sm border border-dark rounded mt-4 text-center">
                <div class="h2 border-bottom border-dark mb-4 mt-2">Histoire du serveur</div>
                Duis eget ligula porta, pharetra quam sed, auctor eros. Vivamus porta, libero in blandit hendrerit, enim lectus molestie mauris, ut aliquet libero enim vel massa. Nunc quis tellus ac nunc ultricies pulvinar. Mauris in lacus tellus. Mauris fringilla, urna a varius vestibulum, quam nunc elementum elit, non dictum lectus nulla vel erat. Donec varius ornare mauris, vitae sollicitudin erat fringilla ut. Nulla non purus egestas, posuere lorem nec, euismod est. Aliquam vitae tellus commodo, cursus arcu a, hendrerit leo. Nulla in lacinia ante. Nunc aliquet quis justo et interdum.
                <a href="{{route('histoire')}}" class="btn text-blue-light btn-block btn-lg btn-outline-info mx-auto mt-2 mb-3">Voir plus</a>


            </div>
        </div>
    </div>
    </body>


</html>
@endsection
