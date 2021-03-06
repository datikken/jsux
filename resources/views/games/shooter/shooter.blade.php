{{--@extends('layouts.app')--}}
{{--@section('content')--}}
<script src="/vendor/games/shooter/jquery-2.0.0.min.js" type="text/javascript"></script>
<script src="/vendor/games/shooter/kinetic-v4.5.1.min.js" type="text/javascript"></script>
<script src="/vendor/games/shooter/bootstrap.min.js" type="text/javascript"></script>

<link rel="stylesheet" href="/css/games/shooter/normalize.css"/>
<link rel="stylesheet" href="/css/games/shooter/bootstrap.min.css">
<link rel="stylesheet" href="/css/games/shooter/style.css"/>

<div id="the-navbar" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="navbar-inner">
        <div class="pull-left">
            <a class="brand" href="#">2D Shooter</a>
            <ul class="nav">
                <li class="divider-vertical"></li>
                <li><a href="#game-menu" data-toggle="modal">Menu</a></li>
                <li><a href="#settings" data-toggle="modal">Settings</a></li>
                <li><a href="#users" data-toggle="modal">Users</a></li>
                <li><a href="#about" data-toggle="modal">About</a></li>
            </ul>
        </div>
        <div class="pull-right">
            <ul class="nav">
                <li class="divider-vertical"></li>
                <li><a id="game-play" href="#"><i class="icon-play icon-white"></i> Play</a></li>
                <li><a id="game-pause" href="#"><i class="icon-pause icon-white"></i> Pause</a></li>
            </ul>
        </div>
    </div>
</div>

<div id="playground" tabindex="0" role="main"></div>

<div id="game-menu" class="modal hide fade" tabindex="-1" role="dialog">
    <div class="modal-header">
        <button class="close" data-dismiss="modal">&times;</button>
        <h2>Game menu</h2>
    </div>
    <div class="modal-body">
        <p id="message-user"></p>
        <p id="message-score"></p>
    </div>
    <div class="modal-footer">
        <button id="game-end" class="btn" data-dismiss="modal">End current game</button>
        <button id="game-begin" class="btn btn-primary" data-dismiss="modal">Begin new game</button>
    </div>
</div>

<div id="settings" class="modal hide fade" tabindex="-1" role="dialog">
    <div class="modal-header">
        <button class="close" data-dismiss="modal">&times;</button>
        <h2>Game settings</h2>
    </div>
    <div class="modal-body">
        <div class="form-horizontal">
            <div class="control-group">
                <label class="control-label" for="player-speed">Player speed</label>
                <div class="controls">
                    <input id="player-speed" type="number" value="4" required min="1" pattern="^\d+$"/>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="difficulty">Game difficulty</label>
                <div class="controls">
                    <input id="difficulty" type="number" value="1" required min="1" pattern="^\d+$"/>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal">Close</button>
        <button id="settings-save" class="btn btn-primary" data-dismiss="modal">Save</button>
    </div>
</div>

<div id="users" class="modal hide fade" tabindex="-1" role="dialog">
    <div class="modal-header">
        <button class="close" data-dismiss="modal">&times;</button>
        <h2>User management</h2>
    </div>
    <div class="modal-body">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#all-users" data-toggle="tab">All users</a></li>
            <li><a href="#new-user" data-toggle="tab">New user</a></li>
        </ul>
        <div class="tab-content">
            <div id="all-users" class="tab-pane active">
                <h4>Overview of all user accounts</h4>
                <p>You can log-in as any user to play the game and to improve high scores.</p>
                <div class="content"></div>
            </div>
            <div id="new-user" class="tab-pane">
                <form class="form-horizontal">
                    <fieldset>
                        <legend>Create new user account</legend>
                        <div class="control-group">
                            <label class="control-label" for="new-user-name">Name</label>
                            <div class="controls">
                                <input id="new-user-name" type="text" required pattern="^\S.*\S$|\S" title="username"/>
                                <span class="help-inline hide">new uses was successfully created</span>
                            </div>
                        </div>
                    </fieldset>
                    <div class="form-actions">
                        <input class="btn btn-primary" type="submit" value="Create"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div id="about" class="modal hide fade" tabindex="-1" role="dialog">
    <div class="modal-header">
        <button class="close" data-dismiss="modal">&times;</button>
        <h2>About 2D Shooter game</h2>
    </div>
    <div class="modal-body">
        <p>2D action-shooter game, client-side JavaScript application with HTML5 and CSS3.</p>
        <p>For more see <a href="https://github.com/mudrutom/2D-Shooter">GitHub repository</a>.</p>
        <h5>How to play:</h5>
        <p>
            Use <code>W</code>,<code>S</code>,<code>A</code>,<code>D</code> keys to move the player
            and mouse-clicks for shooting. The goal of the game is to survive as long as possible.
        </p>
    </div>
</div>

<!-- load main JavaScript using Require.js -->
<script data-main="vendor/games/shooter/game/main.js" src="/vendor/games/shooter/require-2.1.6.min.js" type="text/javascript"></script>
{{--@endsection--}}
