@extends('master')

@section('body')
    <div class="container-fluid">
        <div id="particles-js" class="row flex-column justify-content-around">
            <div class="text-center col-12 mt-5">
                <h1 class="purple-font montserrat title mb-1">I am johnatan jensen</h1>
                <span class="subtitle karla">welcome to my portfolio</span>
            </div>

            <div class="text-center col-12 pt-5 pb-5 mt-4 mb-4">
                <a href="" class="typewrite karla" data-period="2000"
                   data-type='["My website is currently under development.",
                   "Im from Miami, FL and I love to code.",
                   "I build beautiful web apps.",
                   "I love function and form.",
                   "I also love to travel.",
                   "Im a pizza and beer connoisseur.",
                   "Im running out of things to say. Please enjoy the rest of my portfolio now.",
                   "Just scroll down, please. Its getting a bit awkward."]'>
                    <span class="wrap"></span>
                </a>
            </div>

            <div class="text-center">
                <img src="{{ asset('img/laptop-guy.png') }}" alt="image of a laptop" class="img-fluid laptop-guy">
            </div>
        </div>

        <div class="row" style="margin-top: -200px">
            <div class="container">
                <div class="row mt-5">
                    <div class="col-12 section-title">
                        <div class="title-bar"></div>
                        <h2 class="montserrat light_font purple-font">My Skillset</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mid_section_background pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 skills_wrapper">
                        <div class="row h-100">
                            <div class="col-12 col-lg-4 skills_container">
                                <h3 class="montserrat bold_font">Technologies</h3>
                                <div class="mt-3 text-left">
                                    <span class="badge badge-pill">Laravel 5+</span>
                                    <span class="badge badge-pill">Vue.js</span>
                                    <span class="badge badge-pill">PHP 5+</span>
                                    <span class="badge badge-pill">ES 5+/Javascript</span>
                                    <span class="badge badge-pill">JSON</span>
                                    <span class="badge badge-pill">Bootstrap 3+</span>
                                    <span class="badge badge-pill">SASS</span>
                                    <span class="badge badge-pill">HTML+CSS</span>
                                    <span class="badge badge-pill">MySQL</span>
                                    <span class="badge badge-pill">MongoDB</span>
                                    <span class="badge badge-pill">NGINX</span>
                                    <span class="badge badge-pill">Apache</span>
                                    <span class="badge badge-pill">Symfony 3+</span>
                                    <span class="badge badge-pill">Node.js</span>
                                    <span class="badge badge-pill">Vagrant</span>
                                    <span class="badge badge-pill">VirtualBox</span>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4 skills_container">
                                <h3 class="montserrat bold_font">Tools/Practice</h3>
                                <div class="mt-3 text-left">
                                    <span class="badge badge-pill">Webpack</span>
                                    <span class="badge badge-pill">Homestead</span>
                                    <span class="badge badge-pill">Amazon Web Services</span>
                                    <span class="badge badge-pill">Git</span>
                                    <span class="badge badge-pill">GitHub</span>
                                    <span class="badge badge-pill">Laravel Forge</span>
                                    <span class="badge badge-pill">Composer</span>
                                    <span class="badge badge-pill">NPM</span>
                                    <span class="badge badge-pill">SEO</span>
                                    <span class="badge badge-pill">TDD</span>
                                    <span class="badge badge-pill">PHPUnit</span>
                                    <span class="badge badge-pill">REST</span>
                                    <span class="badge badge-pill">CI/CD</span>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4 skills_container">
                                <h3 class="montserrat bold_font">Experience with</h3>
                                <div class="mt-3 text-left">
                                    <span class="badge badge-pill">Stripe API</span>
                                    <span class="badge badge-pill">Shopify API</span>
                                    <span class="badge badge-pill">HubSpot</span>
                                    <span class="badge badge-pill">Infusionsoft API</span>
                                    <span class="badge badge-pill">Agile</span>
                                    <span class="badge badge-pill">Linux/Ubuntu</span>
                                    <span class="badge badge-pill">Scrum</span>
                                    <span class="badge badge-pill">Server Management</span>
                                    <span class="badge badge-pill">DevOps</span>
                                    <span class="badge badge-pill">Cross-browser compatibility</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 p-3 p-lg-0 about_me mt-5">
                        <span class="white_font karla">Actively working with Laravel and Vue everyday for the past 3+ years. I have project management experience of 3+ years. I strive to provide readable and maintainable code everyday. I love what I do and am passionate about it. </span>
                    </div>
                </div>
            </div>
        </div>

        <div id="projects" class="row mt-5 mb-5">
            <div class="container">
                <div class="row mt-5">
                    <div class="col-12 section-title">
                        <div class="title-bar"></div>
                        <h2 class="montserrat light_font purple-font">My Recent Work</h2>
                    </div>
                </div>

                <div class="row justify-content-between align-items-center pl-4 pr-4">
                    <div class="project_container">
                        <div class="overview">
                            <span class="project_title">Garmeo</span>
                            <span class="project_text">A multi-app system integrating B2B and B2C information in a realtime web flow. Equipped with a custom garment editor built with Vue and a fabric.js.</span>
                            <a href="/project/garmeo">
                                <button class="btn purple_outline_btn">View project ></button>
                            </a>
                        </div>
                    </div>
                    <div class="project_container">
                        <div class="overview">
                            <span class="project_title">Hoopmade</span>
                            <span class="project_text">A subscription-based design library for embroiders. Sign up and receive a limited amount of design downloads a month.</span>
                            <a href="/project/hoopmade">
                                <button class="btn purple_outline_btn">View project ></button>
                            </a>
                        </div>
                    </div>
                    <div class="project_container">
                        <div class="overview">
                            <span class="project_title">Ricoma</span>
                            <span class="project_text">Company website that showcases the quality of their machines. Fully equipped with admin panels and a dealer portal.</span>
                            <a href="/project/ricoma">
                                <button class="btn purple_outline_btn">View project ></button>
                            </a>
                        </div>
                    </div>
                    <div class="project_container">
                        <div class="overview">
                            <span class="project_title">Vidsuade</span>
                            <span class="project_text">Small SPA website for a video agency. Mobile responsive and built entirely on Vue.</span>
                            <a href="">
                                {{--<button class="btn purple_outline_btn">View project ></button>--}}
                            </a>
                        </div>
                    </div>
                    <div class="project_container">
                        <div class="overview">
                            <span class="project_title">My Portfolio</span>
                            <span class="project_text">My portfolio showcases the frontend portion of my skillset. Cross-browser compatible, mobile responsive, SEO friendly and snappy. Custom made UI/UX.</span>
                            <a href="">
                                {{--<button class="btn purple_outline_btn">View project ></button>--}}
                            </a>
                        </div>
                    </div>
                    <div class="project_container">
                        <div class="overview">
                            <span class="project_title">Dunsly</span>
                            <span class="project_text">(Coming soon) A fintech webapp I'm working on to help myself and others better manage our ever growing monthly subscriptions and auto-pay bills in one location.</span>
                            <a href="">
                                {{--<button class="btn purple_outline_btn">View project ></button>--}}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row contact-section pt-5 pb-3">
            <div class="bottom_bg"></div>
            <div class="container">
                <div class="row mt-5">
                    <div class="col-12 section-title text-center justify-content-center">
                        {{--<div class="title-bar"></div>--}}
                        <h2 class="montserrat light_font purple-font">Get in touch</h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-lg-10 offset-lg-1 col-xl-8 offset-xl-2 mt-3 mb-3 karla text-center">
                        <p>Feel free to contact me if you have any further questions. I usually reply within 24 hours.
                            If this is career-based I can provide a resume as well. Thanks for looking through my
                            portfolio! If for whatever reason the form does not work, feel free to contact me at <a
                                    href="mailto:jensenwd3@gmail.com"><span>jensenwd3@gmail.com</span></a></p>
                    </div>
                    <div class="col-12 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">
                        <form method="post" action="{{ route('mailable') }}">
                            @csrf
                            <div class="form-group">
                                <label class="karla" for="name">Name</label>
                                <input type="text" required class="form-control" name="name" placeholder="">
                            </div>
                            <div class="form-group">
                                <label class="karla" for="email">Email</label>
                                <input type="text" required class="form-control" name="email" placeholder="">
                            </div>
                            <div class="form-group">
                                <label class="karla" for="message">Reason for contact</label>
                                <textarea class="form-control" required name="message" rows="4"></textarea>
                            </div>
                            <button type="submit" disabled class="purple_outline_btn purple-font position-relative m-auto">
                                <div class="btn_effect_bg"></div>
                                <span>get my attention</span>
                            </button>
                            <span class="small text-muted">website is currently under development. please email me directly for contact.</span>
                        </form>
                    </div>

                    <div class="col-12 d-flex justify-content-center mt-4">
                        <a href="https://github.com/JensenWD" class="mr-4 social-icon" target="_blank"><i class="fab fa-github-square"></i></a>
                        <a href="https://www.linkedin.com/in/jensenwd/" class="social-icon" target="_blank"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{asset('js/particles.min.js')}}"></script>
    <script type="text/javascript">
        /* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
        particlesJS.load('particles-js', 'js/particles-config.json', function () {
        });

        var TxtType = function (el, toRotate, period) {
            this.toRotate = toRotate;
            this.el = el;
            this.loopNum = 0;
            this.period = parseInt(period, 10) || 2000;
            this.txt = '';
            this.tick();
            this.isDeleting = false;
        };

        TxtType.prototype.tick = function () {
            var i = this.loopNum % this.toRotate.length;
            var fullTxt = this.toRotate[i];

            if (this.isDeleting) {
                this.txt = fullTxt.substring(0, this.txt.length - 1);
            } else {
                this.txt = fullTxt.substring(0, this.txt.length + 1);
            }

            this.el.innerHTML = '<span class="wrap">' + this.txt + '</span>';

            var that = this;
            var delta = 140 - Math.random() * 100;

            if (this.isDeleting) {
                delta /= 3;
            }

            if (!this.isDeleting && this.txt === fullTxt) {
                delta = this.period;
                this.isDeleting = true;
            } else if (this.isDeleting && this.txt === '') {
                this.isDeleting = false;
                this.loopNum++;
                delta = 500;
            }

            setTimeout(function () {
                that.tick();
            }, delta);
        };

        window.onload = function () {
            var elements = document.getElementsByClassName('typewrite');
            for (var i = 0; i < elements.length; i++) {
                var toRotate = elements[i].getAttribute('data-type');
                var period = elements[i].getAttribute('data-period');
                if (toRotate) {
                    new TxtType(elements[i], JSON.parse(toRotate), period);
                }
            }
            // INJECT CSS
            var css = document.createElement("style");
            css.type = "text/css";
            css.innerHTML = ".typewrite > .wrap { border-right: 0.2rem solid #000000}";
            document.body.appendChild(css);
        };
    </script>
@endpush