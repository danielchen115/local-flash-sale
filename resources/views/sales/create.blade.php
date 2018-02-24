@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Offer a ride on your next journey!</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        {{--@TODO customize form (incl. labels and names) for speicfic use. THIS WAS COPY AND PASTED FROM BOOTSTRAP SITE--}}
                        <form>
                            <div class="form-group row">
                                <label for="inputPickup" class="col-sm-2 col-form-label">Pick-up</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputPickup" placeholder="Example: Toronto, Ottawa">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputDropoff" class="col-sm-2 col-form-label">Drop-off</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputDropoff" placeholder="Example: Waterloo, Hamilton">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputSeats" class="col-sm-2 col-form-label">Seats</label>
                                <div class="col-sm-10">
                                    <select id="inputSeats" class="form-control">
                                        <option selected>Choose...</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7+</option>
                                    </select>
                                </div>

                            </div>

                            {{--@TODO date/time picker--}}

                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Continue</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection