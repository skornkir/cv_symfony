<?php
use Illuminate\Support\Facades\DB;

$works = DB::table('works')->get();
$educations = DB::table('educations')->get();
?>
<div class="crt-paper-layers crt-animate experience">
    <div class="crt-paper clear-mrg clearfix">
        <div class="crt-paper-cont paper-padd clear-mrg">
            <section id="exp" class="section padd-box brd-btm"><h2 class="title-lg text-upper">Опыт работы</h2>
                <div class="education">
                    @foreach($works as $work)
                        <div class="education-box"><span
                                    class="education-date"> <span>{{$work->interval_work}}</span> </span>
                            <h3>{{$work->post}}</h3>
                            <a href="https://themeforest.net/user/px-lab/portfolio"> <span
                                        class="education-company">{{$work->company}}</span> </a>
                            <p>{{$work->description}}</p>
                        </div>
                    @endforeach
                </div>
            </section>
            <section id="timeline" class="section padd-box"><h2 class="title-lg text-upper">Образование</h2>
                <div class="education">
                    @foreach($educations as $education)
                        <div class="education-box">
                            <span class="education-date">
                                <span>{{$education->interval_work}}</span>
                            </span>
                            <h3>
                                <a href="https://themeforest.net/user/px-lab?ref=PX-lab">{{$education->speciality}}</a>
                            </h3>
                            <a href="https://themeforest.net/user/px-lab?ref=PX-lab">
                                <span class="education-company">{{$education->university}}</span>
                            </a>
                        </div>
                    @endforeach
                </div>
            </section>
        </div>
    </div>
</div>