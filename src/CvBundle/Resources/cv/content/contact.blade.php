<div class="crt-paper-layers crt-animated">
    <div class="crt-paper clear-mrg clearfix">
        <div class="crt-paper-cont paper-padd clear-mrg">
            <section id="contacts" class="section padd-box"><h2 class="title-lg text-upper">Связаться со мной</h2>
                <div class="padd-box-sm">
                    {!! Form::open(['route' => 'contact.store']) !!}
                        {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
                        <p class="form-control">
                            {!! Form::label('name','Ваше имя (обязательное)') !!}
                            {!! Form::text('name') !!}
                        </p>

                        <p class="form-control">
                            {!! Form::label('email','Email (обязательное)') !!}
                            {!! Form::text('email') !!}
                        </p>

                        <p class="form-control">
                            {!! Form::label('subject','Тема вопроса') !!}
                            {!! Form::text('subject') !!}
                        </p>

                        <p class="form-control">
                            {!! Form::label('text','Текст сообщения') !!}
                            {!! Form::textarea('text') !!}
                        </p>

                        {!! Form::submit('Отправить', ['class' => 'contact-submit']) !!}

                    {!! Form::close() !!}
                </div>
            </section>
        </div>
    </div>
</div>
