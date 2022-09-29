<template>
    <div>
        <!-- Showcase -->
        <section class="bg-light text-dark p-5 text-center text-sm-start">
            <div class="container">
                <div class="d-sm-flex align-items-center justify-content-between">
                    <img class="img-fluid d-none d-sm-block" src="assets/image/test.jpg" alt="">
                </div>
            </div>
        </section>

        <!-- Description -->
        <section class="bg-light text-dark p-5">
            <div class="container">
                <h2 class="text-center mb-4">流明法(Lumen)是一種計算指定空間內所需照明燈具盞數的簡易方法</h2>
                <h4 class="text-center">`N = (E * A)/(F * U * M)`</h4>
            </div>
        </section>

        <!-- Lumen Method Calculator -->

        <section class="bg-light text-dark p-5">
            <div class="container">
                <div class="d-md-flex justify-content-between align-items-center">
                    <h5 class="mb-3 mb-md-0">E(照明設計之平均基準照度, Lux):</h5>

                    <div class="number-input">
                        <input type="text" class="form-control stringE" placeholder="請輸入/單位m">
                    </div>
                </div>
                <br>
                <div class="container">
                    <div class="row text-center g-4">
                        <div class="col-md-4">
                            <button type="button" class="btn btn-secondary givenE w-75 h-100" data-num="300">
                                書房/工作間<br>
                                300
                            </button>
                        </div>
                        <div class="col-md-4">
                            <button type="button" class="btn btn-secondary givenE w-75 h-100" data-num="150">
                                起居室/臥室/<br>
                                餐廳/廚房/<br>
                                健身房/交誼廳<br>
                                150
                            </button>
                        </div>
                        <div class="col-md-4">
                            <button type="button" class="btn btn-secondary givenE w-75 h-100" data-num="100">
                                浴室/更衣室/<br>
                                桑拿房/游泳池<br>
                                100
                            </button>
                        </div>
                        <div class="col-md-4">
                            <button type="button" class="btn btn-secondary givenE w-75 h-100" data-num="50">
                                分隔走廊/休息室<br>
                                50
                            </button>
                        </div>
                        <div class="col-md-4">
                            <button type="button" class="btn btn-secondary givenE w-75 h-100" data-num="30">
                                樓層走廊/電梯/大堂<br>
                                30
                            </button>
                        </div>
                        <div class="col-md-4">
                            <button type="button" class="btn btn-secondary givenE w-75 h-100" data-num="20">
                                主要通道技術樓層/<br>
                                地下室/閣樓<br>
                                20
                            </button>
                        </div>
                    </div>
                </div>
                <br>
                <div class="d-md-flex justify-content-between align-items-center">
                    <h5 class="mb-3 mb-md-0">L(空間長度)：</h5>

                    <div class="number-input">
                        <input type="text" class="form-control stringL" placeholder="請輸入/單位m">
                    </div>
                </div>
                <br>
                <div class="d-md-flex justify-content-between align-items-center">
                    <h5 class="mb-3 mb-md-0">W(空間寬度)：</h5>

                    <div class="number-input">
                        <input type="text" class="form-control stringW" placeholder="請輸入/單位m">
                    </div>
                </div>
                <br>
                <div class="d-md-flex justify-content-between align-items-center">
                    <h5 class="mb-3 mb-md-0">F(每盞燈具流明數，lm)：</h5>

                    <div class="number-input">
                        <input type="text" class="form-control stringF" placeholder="請輸入">
                    </div>
                </div>
                <br>
                <div class="d-md-flex justify-content-between align-items-center">
                    <h5 class="mb-3 mb-md-0">U(照明燈具照明率，Cu)：</h5>

                    <div class="number-input">
                        <input type="text" class="form-control" placeholder="0.55/單位%（不需輸入）">
                    </div>
                </div>
                <br>
                <div class="d-md-flex justify-content-between align-items-center">
                    <h5 class="mb-3 mb-md-0">M(維護係數)：</h5>

                    <div class="number-input">
                        <input type="text" class="form-control" placeholder="0.65/單位%（不需輸入）">
                    </div>
                </div>
                <br>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button class="btn btn-danger me-md-2 btn-clear" type="button">全部清除</button>
                    <button class="btn btn-primary lumen-method" type="button">確認計算</button>
                </div>
                <hr>
                <br>
                <div class="d-md-flex justify-content-between align-items-center">
                    <h5 class="mb-3 mb-md-0">N(所需照明燈具之盞數) ＝</h5>

                    <div class="number-input">
                        <input type="text" class="form-control stringN text-end" placeholder='請點選"確認計算"'>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="p-5 text-dark text-center position-relative" style="background-color: #adb5bd;">
            <div class="container">
                <p class="lead">德毅照明</p>
            </div>
        </footer>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
