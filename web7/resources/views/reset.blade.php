@extends("layout")

@section('body')
        <div class="row">
            <form action="/pass/reset" method="post" class="col-lg-6 col-lg-offset-3">
                <div class="form-group">
                    <label>邮件地址：</label>
                    <input type="email" class="form-control" name="mail" placeholder="" required>
                </div>
                 <div>
                    <label>验证码 ( {{ $ques }} )：</label><br/>
                    <canvas id="vtt_captcha" width="680" height="460" rel="{{ $uuid }}"></canvas>
                    <input type="hidden" id="captcha_x" name="captcha_x" value="">
                    <input type="hidden" id="captcha_y" name="captcha_y" value="">
                </div>
                <button class="btn btn-primary pull-right" type="submit">发送重置链接</button>
            </form>
            </div>
        <br/>
@include("captcha")
@endsection