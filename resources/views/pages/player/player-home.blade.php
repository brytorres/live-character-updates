@extends('layouts.app')

@section('title')
Dashboard
@endsection

@section('content')
<div class="container">
    <h1 class="majestic text-center">Player Dashboard</h1>
    <div class="row justify-content-center">
        <div class="col-md-11">

            <div class="card player-dashboard">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form>

                        {{-- GENERAL --}}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="general">
                                    <h3>General</h3>
                                    <div class="form-row">
                                        <div class="form-group col-6">
                                            <label for="char-name">Character Name</label>
                                            <input type="text" class="form-control" id="char-name" placeholder="Unnamed">
                                        </div>
                                        <div class="form-group col-3">
                                            <label for="gender">Gender</label>
                                            <input type="text" class="form-control" id="gender">
                                        </div>
                                        <div class="form-group col-3">
                                            <label for="age">Age</label>
                                            <input type="text" class="form-control" id="age">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-2">
                                            <label for="race">Race</label>
                                            <input type="text" class="form-control" id="race" placeholder="">
                                        </div>
                                        <div class="form-group col-2">
                                            <label for="class">Class</label>
                                            <input type="text" class="form-control" id="class" placeholder="">
                                        </div>
                                        <div class="form-group col-2">
                                            <label for="class-level">Class Lvl</label>
                                            <input type="text" class="form-control" id="class-level" placeholder="">
                                        </div>
                                        <div class="form-group col-3">
                                            <label for="force">Alignment Force</label>
                                            <select id="force" class="form-control">
                                                <option selected>Lawful</option>
                                                <option>Neutral</option>
                                                <option>Chaos</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-3">
                                            <label for="moral">Alignment Moral</label>
                                            <select id="moral" class="form-control">
                                                <option selected>Good</option>
                                                <option>Neutral</option>
                                                <option>Evil</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col">
                                            <label for="languages">Languages</label>
                                            <input type="text" class="form-control" id="languages">
                                        </div>
                                        <div class="form-group col">
                                            <label for="homeland">Homeland</label>
                                            <input type="text" class="form-control" id="homeland">
                                        </div>
                                        <div class="form-group col">
                                            <label for="deity">Deity</label>
                                            <input type="text" class="form-control" id="deity">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="background">Background</label>
                                        <textarea class="form-control" id="background" rows="3"></textarea>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col">
                                            <label for="size">Size</label>
                                            <input type="text" class="form-control" id="size">
                                        </div>
                                        <div class="form-group col">
                                            <label for="homeland">Height</label>
                                            <input type="text" class="form-control" id="homeland">
                                        </div>
                                        <div class="form-group col">
                                            <label for="deity">Weight</label>
                                            <input type="text" class="form-control" id="deity">
                                        </div>
                                        <div class="form-group col">
                                            <label for="hair">Hair</label>
                                            <input type="text" class="form-control" id="hair">
                                        </div>
                                        <div class="form-group col">
                                            <label for="eyes">Eyes</label>
                                            <input type="text" class="form-control" id="eyes">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="char-notes">Notes</label>
                                        <textarea class="form-control" id="char-notes" rows="2"></textarea>
                                    </div>
                                </div>
                            </div>

                            {{-- ABILITIES --}}
                            <div class="col-md-12">
                                <div class="abilities">
                                    <h3>Abilities</h3>
                                    <div class="row">
                                        <div class="col-md-2 strength">
                                            <h4>STR</h4>
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td class="ability_title">Ability Score</td>
                                                        <td class="ability_num">
                                                            <input type="number" name="str-score" id="str-score" placeholder="0">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="ability_title">Ability Modifier</td>
                                                        <td class="ability_num">
                                                            <input type="number" name="str-mod" id="str-mod" placeholder="0">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="ability_title">Temp Score</td>
                                                        <td class="ability_num">
                                                            <input type="number" name="str-temp-score" id="str-temp-score" placeholder="0">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="ability_title">Temp Modifier</td>
                                                        <td class="ability_num">
                                                            <input type="number" name="str-temp-mod" id="str-temp-mod" placeholder="0">
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-md-2 constitution">
                                            <h4>CON</h4>
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td class="ability_title">Ability Score</td>
                                                        <td class="ability_num">
                                                            <input type="number" name="con-score" id="con-score" placeholder="0">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="ability_title">Ability Modifier</td>
                                                        <td class="ability_num">
                                                            <input type="number" name="con-temp-mod" id="con-mod" placeholder="0">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="ability_title">Temp Score</td>
                                                        <td class="ability_num">
                                                            <input type="number" name="con-temp-score" id="con-temp-score" placeholder="0">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="ability_title">Temp Modifier</td>
                                                        <td class="ability_num">
                                                            <input type="number" name="con-temp-mod" id="con-temp-mod" placeholder="0">
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-md-2 dexterity">
                                            <h4>DEX</h4>
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td class="ability_title">Ability Score</td>
                                                        <td class="ability_num">
                                                            <input type="number" name="dex-score" id="dex-score" placeholder="0">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="ability_title">Ability Modifier</td>
                                                        <td class="ability_num">
                                                            <input type="number" name="dex-mod" id="dex-mod" placeholder="0">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="ability_title">Temp Score</td>
                                                        <td class="ability_num">
                                                            <input type="number" name="dex-temp-score" id="dex-temp-score" placeholder="0">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="ability_title">Temp Modifier</td>
                                                        <td class="ability_num">
                                                            <input type="number" name="dex-temp-mod" id="dex-temp-mod" placeholder="0">
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-md-2 intelligence">
                                            <h4>INT</h4>
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td class="ability_title">Ability Score</td>
                                                        <td class="ability_num">
                                                            <input type="number" name="int-score" id="int-score" placeholder="0">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="ability_title">Ability Modifier</td>
                                                        <td class="ability_num">
                                                            <input type="number" name="int-mod" id="int-mod" placeholder="0">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="ability_title">Temp Score</td>
                                                        <td class="ability_num">
                                                            <input type="number" name="int-temp-score" id="int-temp-score" placeholder="0">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="ability_title">Temp Modifier</td>
                                                        <td class="ability_num">
                                                            <input type="number" name="con-temp-mod" id="con-temp-mod" placeholder="0">
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-md-2 wisdom">
                                            <h4>WIS</h4>
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td class="ability_title">Ability Score</td>
                                                        <td class="ability_num">
                                                            <input type="number" name="wis-score" id="wis-score" placeholder="0">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="ability_title">Ability Modifier</td>
                                                        <td class="ability_num">
                                                            <input type="number" name="wis-mod" id="wis-mod" placeholder="0">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="ability_title">Temp Score</td>
                                                        <td class="ability_num">
                                                            <input type="number" name="wis-temp-score" id="wis-temp-score" placeholder="0">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="ability_title">Temp Modifier</td>
                                                        <td class="ability_num">
                                                            <input type="number" name="wis-temp-mod" id="wis-temp-mod" placeholder="0">
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-md-2 charisma">
                                            <h4>CHA</h4>
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td class="ability_title">Ability Score</td>
                                                        <td class="ability_num">
                                                            <input type="number" name="cha-score" id="cha-score" placeholder="0">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="ability_title">Ability Modifier</td>
                                                        <td class="ability_num">
                                                            <input type="number" name="cha-mod" id="cha-mod" placeholder="0">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="ability_title">Temp Score</td>
                                                        <td class="ability_num">
                                                            <input type="number" name="cha-temp-score" id="cha-temp-score" placeholder="0">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="ability_title">Temp Modifier</td>
                                                        <td class="ability_num">
                                                            <input type="number" name="cha-temp-mod" id="cha-temp-mod" placeholder="0">
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- DEFENSE --}}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="defense">
                                    <h3>Defense</h3>

                                    <div class="form-row hp">
                                        <div class="form-group hp-total col-sm-3">
                                            <label for="hp-total">HP Total</label>
                                            <input type="text" class="form-control" id="hp-total">
                                        </div>
                                        <div class="form-group hp-current col-sm-3">
                                            <label for="hp-current">HP Current</label>
                                            <input type="text" class="form-control" id="hp-current">
                                        </div>
                                        <div class="form-group non-lethal-damage col-sm-2">
                                            <label for="non-lethal-damage">Nonlethal&nbsp;Damage</label>
                                            <input type="text" class="form-control" id="non-lethal-damage">
                                        </div>
                                        <div class="form-group damage-reduction col-sm-2">
                                            <label for="damage-reduction">Damage&nbsp;Reduction</label>
                                            <input type="text" class="form-control" id="damage-reduction">
                                        </div>
                                        <div class="form-group spell-resistance col-sm-2">
                                            <label for="spell-resistance">Spell Resistance</label>
                                            <input type="text" class="form-control" id="spell-resistance">
                                        </div>
                                    </div>

                                    <div class="form-row ac">
                                        <div class="form-group ac-total col-sm-3">
                                            <label for="ac-total">AC&nbsp;Total</label>
                                            <input type="text" class="form-control" id="ac-total">
                                        </div>
                                        <div class="form-group armor-bonus col-sm-1">
                                            <label for="armor-bonus">Armor&nbsp;Bonus</label>
                                            <input type="text" class="form-control" id="armor-bonus">
                                        </div>
                                        <div class="form-group shield-bonus col-sm-1">
                                            <label for="spell-shield-bonus">Shield&nbsp;Bonus</label>
                                            <input type="text" class="form-control" id="spell-shield-bonus">
                                        </div>
                                        <div class="form-group dex-mod col-sm-1">
                                            <label for="dex-mod">DEX&nbsp;Mod</label>
                                            <input type="text" class="form-control" id="dex-mod">
                                        </div>
                                        <div class="form-group size-mod col-sm-1">
                                            <label for="size-mod">Size&nbsp;Mod</label>
                                            <input type="text" class="form-control" id="size-mod">
                                        </div>
                                        <div class="form-group natural-armor col-sm-1">
                                            <label for="natural-armor">Natural&nbsp;Armor</label>
                                            <input type="text" class="form-control" id="natural-armor">
                                        </div>
                                        <div class="form-group deflection col-sm-1">
                                            <label for="deflection">Deflection</label>
                                            <input type="text" class="form-control" id="deflection">
                                        </div>
                                        <div class="form-group ac-misc-mods col-sm-3">
                                            <label for="ac-misc-mods">AC&nbsp;Misc&nbsp;Mods</label>
                                            <input type="text" class="form-control" id="ac-misc-mods">
                                        </div>
                                    </div>

                                    <div class="form-row other-ac">
                                        <div class="form-group touch-armor-class col-sm-3">
                                            <label for="touch-armor-class">Touch AC</label>
                                            <input type="text" class="form-control" id="touch-armor-class">
                                        </div>
                                        <div class="form-group flat-footed-ac col-sm-3">
                                            <label for="flat-footed-ac">Flat Footed AC</label>
                                            <input type="text" class="form-control" id="flat-footed-ac">
                                        </div>
                                        <div class="form-group other-ac-mods col-sm-6">
                                            <label for="other-ac-mods">Other AC Mods</label>
                                            <input type="text" class="form-control" id="other-ac-mods">
                                        </div>
                                    </div>

                                    <h4>Fortitude</h4>
                                    <div class="form-row fortitude">
                                        <div class="form-group fortitude-total col-sm-3">
                                            <label for="other-ac-mods">Total</label>
                                            <input type="text" class="form-control" id="other-ac-mods">
                                        </div>
                                        <div class="form-group fortitude-base-save col-sm-1">
                                            <label for="fortitude-base-save">Base Save</label>
                                            <input type="text" class="form-control" id="fortitude-base-save">
                                        </div>
                                        <div class="form-group fortitude-ability-mod col-sm-1">
                                            <label for="fortitude-ability-mod">Ability&nbsp;Mod</label>
                                            <input type="text" class="form-control" id="fortitude-ability-mod">
                                        </div>
                                        <div class="form-group fortitude-magic-mod col-sm-1">
                                            <label for="fortitude-magic-mod">Magic Mod</label>
                                            <input type="text" class="form-control" id="fortitude-magic-mod">
                                        </div>
                                        <div class="form-group fortitude-misc-mod col-sm-1">
                                            <label for="fortitude-misc-mod">Misc Mod</label>
                                            <input type="text" class="form-control" id="fortitude-misc-mod">
                                        </div>
                                        <div class="form-group fortitude-temp-mod col-sm-1">
                                            <label for="fortitude-temp-mod">Temp Mod</label>
                                            <input type="text" class="form-control" id="fortitude-temp-mod">
                                        </div>
                                        <div class="form-group fortitude-other-mods col-sm-4">
                                            <label for="fortitude-other-mods">Other Mods</label>
                                            <input type="text" class="form-control" id="fortitude-other-mods">
                                        </div>
                                    </div>

                                    <h4>Reflex</h4>
                                    <div class="form-row reflex">
                                        <div class="form-group reflex-total col-sm-3">
                                            <label for="other-ac-mods">Total</label>
                                            <input type="text" class="form-control" id="other-ac-mods">
                                        </div>
                                        <div class="form-group reflex-base-save col-sm-1">
                                            <label for="reflex-base-save">Base Save</label>
                                            <input type="text" class="form-control" id="reflex-base-save">
                                        </div>
                                        <div class="form-group reflex-ability-mod col-sm-1">
                                            <label for="reflex-ability-mod">Ability&nbsp;Mod</label>
                                            <input type="text" class="form-control" id="reflex-ability-mod">
                                        </div>
                                        <div class="form-group reflex-magic-mod col-sm-1">
                                            <label for="reflex-magic-mod">Magic Mod</label>
                                            <input type="text" class="form-control" id="reflex-magic-mod">
                                        </div>
                                        <div class="form-group reflex-misc-mod col-sm-1">
                                            <label for="reflex-misc-mod">Misc Mod</label>
                                            <input type="text" class="form-control" id="reflex-misc-mod">
                                        </div>
                                        <div class="form-group reflex-temp-mod col-sm-1">
                                            <label for="reflex-temp-mod">Temp Mod</label>
                                            <input type="text" class="form-control" id="reflex-temp-mod">
                                        </div>
                                        <div class="form-group reflex-other-mods col-sm-4">
                                            <label for="reflex-other-mods">Other Mods</label>
                                            <input type="text" class="form-control" id="reflex-other-mods">
                                        </div>
                                    </div>

                                    <h4>Will</h4>
                                    <div class="form-row will">
                                        <div class="form-group will-total col-sm-3">
                                            <label for="other-ac-mods">Total</label>
                                            <input type="text" class="form-control" id="other-ac-mods">
                                        </div>
                                        <div class="form-group will-base-save col-sm-1">
                                            <label for="will-base-save">Base Save</label>
                                            <input type="text" class="form-control" id="will-base-save">
                                        </div>
                                        <div class="form-group will-ability-mod col-sm-1">
                                            <label for="will-ability-mod">Ability&nbsp;Mod</label>
                                            <input type="text" class="form-control" id="will-ability-mod">
                                        </div>
                                        <div class="form-group will-magic-mod col-sm-1">
                                            <label for="will-magic-mod">Magic Mod</label>
                                            <input type="text" class="form-control" id="will-magic-mod">
                                        </div>
                                        <div class="form-group will-misc-mod col-sm-1">
                                            <label for="will-misc-mod">Misc Mod</label>
                                            <input type="text" class="form-control" id="will-misc-mod">
                                        </div>
                                        <div class="form-group will-temp-mod col-sm-1">
                                            <label for="will-temp-mod">Temp Mod</label>
                                            <input type="text" class="form-control" id="will-temp-mod">
                                        </div>
                                        <div class="form-group will-other-mods col-sm-4">
                                            <label for="will-other-mods">Other Mods</label>
                                            <input type="text" class="form-control" id="will-other-mods">
                                        </div>
                                    </div>

                                    <h4>All Resistances</h4>
                                    <div class="form-row all-resistance">
                                        <div class="form-group resistances col-sm-6">
                                            <label for="resistances">Resistances</label>
                                            <input type="text" class="form-control" id="resistances">
                                        </div>
                                        <div class="form-group immunities col-sm-6">
                                            <label for="immunities">Immunities</label>
                                            <input type="text" class="form-control" id="immunities">
                                        </div>
                                    </div>

                                    <h4>Combat Maneuver Defense</h4>
                                    <div class="form-row cmd">
                                        <div class="form-group cmd-total col-sm-2">
                                            <label for="cmd-total">Total</label>
                                            <input type="text" class="form-control" id="cmd-total">
                                        </div>
                                        <div class="form-group cmd-base-attack-bonus col-sm-1">
                                            <label for="cmd-base-attack-bonus">Base Attack Bonus</label>
                                            <input type="text" class="form-control" id="cmd-base-attack-bonus">
                                        </div>
                                        <div class="form-group cmd-str-mod col-sm-1">
                                            <label for="cmd-str-mod">STR Mod</label>
                                            <input type="text" class="form-control" id="cmd-str-mod">
                                        </div>
                                        <div class="form-group cmd-dex-mod col-sm-1">
                                            <label for="cmd-dex-mod ">DEX Mod</label>
                                            <input type="text" class="form-control" id="cmd-dex-mod">
                                        </div>
                                        <div class="form-group cmd-size-mod col-sm-1">
                                            <label for="cmd-size-mod">Size Mod</label>
                                            <input type="text" class="form-control" id="cmd-size-mod">
                                        </div>
                                        <div class="form-group cmd-misc-mods col-sm-3">
                                            <label for="cmd-misc-mods">Misc Mods</label>
                                            <input type="text" class="form-control" id="cmd-misc-mods">
                                        </div>
                                        <div class="form-group cmd-temp-mods col-sm-3">
                                            <label for="cmd-temp-mods">Temp Mods</label>
                                            <input type="text" class="form-control" id="cmd-temp-mods">
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>

                        {{-- OFFENSE --}}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="offense">
                                    <h3>Offense</h3>

                                    <h4>Initiative</h4>
                                    <div class="form-row initiative">
                                        <div class="form-group ini-total col-sm-2">
                                            <label for="ini-total">Total</label>
                                            <input type="text" class="form-control" id="ini-total">
                                        </div>
                                        <div class="form-group ini-dex-mod col">
                                            <label for="ini-dex-mod">DEX Mod</label>
                                            <input type="text" class="form-control" id="ini-dex-mod">
                                        </div>
                                        <div class="form-group ini-misc-mod col">
                                            <label for="ini-misc-mod">Misc Mods</label>
                                            <input type="text" class="form-control" id="ini-misc-mod">
                                        </div>
                                        <div class="form-group base-attack-bonus col">
                                            <label for="base-attack-bonus">Base&nbsp;Attack&nbsp;Bonus</label>
                                            <input type="text" class="form-control" id="base-attack-bonus">
                                        </div>
                                        <div class="form-group ini-conditional-mods col-sm-3">
                                            <label for="ini-conditional-mods">Conditional Mods</label>
                                            <input type="text" class="form-control" id="ini-conditional-mods">
                                        </div>
                                        <div class="form-group ini-conditional-mod-notes col-sm-3">
                                            <label for="ini-conditional-mod-notes">Conditional Mods Notes</label>
                                            <input type="text" class="form-control" id="ini-conditional-mod-notes">
                                        </div>
                                    </div>

                                    <h4>Speed</h4>
                                    <div class="form-row speed">
                                        <div class="form-group base col">
                                            <label for="base">Base Speed</label>
                                            <input type="text" class="form-control" id="base">
                                        </div>
                                        <div class="form-group with-armor col">
                                            <label for="with-armor">With Armor</label>
                                            <input type="text" class="form-control" id="with-armor">
                                        </div>
                                        <div class="form-group fly col">
                                            <label for="fly">Flying</label>
                                            <input type="text" class="form-control" id="fly">
                                        </div>
                                        <div class="form-group swim col">
                                            <label for="swim">Swimming</label>
                                            <input type="text" class="form-control" id="swim">
                                        </div>
                                        <div class="form-group climb col">
                                            <label for="climb">Climb</label>
                                            <input type="text" class="form-control" id="climb">
                                        </div>
                                        <div class="form-group burrow col">
                                            <label for="burrow">Burrow</label>
                                            <input type="text" class="form-control" id="burrow">
                                        </div>
                                        <div class="form-group speed-temp-mods col-sm-2">
                                            <label for="speed-temp-mods">Speed Temp Mods</label>
                                            <input type="text" class="form-control" id="speed-temp-mods">
                                        </div>
                                    </div>

                                    <h4>Combat Maneuver Bonus</h4>
                                    <div class="form-row cmb">
                                        <div class="form-group cmb-total col">
                                            <label for="cmb-total">Total</label>
                                            <input type="text" class="form-control" id="cmb-total">
                                        </div>
                                        <div class="form-group cmd-base-attack-bonus col">
                                            <label for="cmd-base-attack-bonus">Base Attack</label>
                                            <input type="text" class="form-control" id="cmd-base-attack-bonus">
                                        </div>
                                        <div class="form-group cmb-str-mod col">
                                            <label for="cmb-str-mod">STR Mod</label>
                                            <input type="text" class="form-control" id="cmb-str-mod">
                                        </div>
                                        <div class="form-group cmb-size-mod col">
                                            <label for="cmb-size-mod">Size Mod</label>
                                            <input type="text" class="form-control" id="cmb-size-mod">
                                        </div>
                                        <div class="form-group cmb-misc-mods col-sm-3">
                                            <label for="cmb-misc-mods">Misc Mods</label>
                                            <input type="text" class="form-control" id="cmb-misc-mods">
                                        </div>
                                        <div class="form-group cmb-temp-mods col-sm-3">
                                            <label for="cmb-temp-mods">Temp Mods</label>
                                            <input type="text" class="form-control" id="cmb-temp-mods">
                                        </div>
                                    </div>



                                </div>
                            </div>
                        </div>

                        {{-- SKILLS --}}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="skills">
                                    <h3>Skills</h3>

                                        <div class="row  text-center">
                                            <div class="form-group col-3">
                                                Skill Name
                                            </div>
                                            <div class="form-group col-1">
                                                Total
                                            </div>
                                            <div class="form-group col-2">
                                                Ability
                                            </div>
                                            <div class="form-group col-1">
                                                Ranks
                                            </div>
                                            <div class="form-group col-1">
                                                Class
                                            </div>
                                            <div class="form-group col-1">
                                                Racial
                                            </div>
                                            <div class="form-group col-1">
                                                Trait
                                            </div>
                                            <div class="form-group col-2">
                                                Misc
                                            </div>
                                        </div>
                                    @foreach($skills as $skill)
                                        <div class="form-row">
                                            <div class="form-group col-3">
                                                {{ $skill->name }}
                                                @if( $skill->name_slug == 'craft' || $skill->name_slug == 'perform' || $skill->name_slug == 'profession')
                                                    <input type="text" class="form-control" id="skill_name_extra">
                                                @endif
                                            </div>
                                            <div class="form-group col-1">
                                                <input type="number" class="form-control" id="total">
                                            </div>
                                            <div class="form-group col-2">
                                                <div class="row">
                                                    <div class="col-5">{{ $skill->ability }}</div>
                                                    <div class="col-7"><input type="number" class="form-control" id="ability-mod"></div>
                                                </div>
                                            </div>
                                            <div class="form-group col-1">
                                                <input type="number" class="form-control" id="ranks">
                                            </div>
                                            <div class="form-group col-1">
                                                <input type="number" class="form-control" id="class">
                                            </div>
                                            <div class="form-group col-1">
                                                <input type="number" class="form-control" id="racial">
                                            </div>
                                            <div class="form-group col-1">
                                                <input type="number" class="form-control" id="trait">
                                            </div>
                                            <div class="form-group col-2">
                                                <input type="text" class="form-control" id="skill-misc">
                                            </div>
                                        </div>
                                    
                                    
                                    @endforeach

                                </div>
                            </div>
                        </div>

                        {{-- SKILLS --}}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="feats">
                                    <h3>Feats</h3>
                                </div>
                            </div>
                        </div>

                        {{-- MONEY & EQUIPMENT --}}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="money">
                                    <h3>Money</h3>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="equipment">
                                    <h3>Equipment</h3>
                                </div>
                            </div>
                        </div>
                        
                        {{-- SPELLS --}}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="spells">
                                    <h3>Spells</h3>
                                </div>
                            </div>
                        </div>

                        {{-- NOTES --}}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="notes">
                                    <h3>Notes</h3>
                                </div>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection