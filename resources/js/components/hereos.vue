<template>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-sm-5 col-md-6">
                    <img class="img-fluid" src="../images/undraw_Time_management_re_tk5w.png" alt="" />
                </div>
                <div class="col-sm-5 offset-sm-2 col-md-6 offset-md-0">
                    <br />
                    <h1 style="text-align: center">
                        Your most advanced way to always catch your trips to school, and
                        back.
                        <br />
                        <router-link to="./register">
                            <button type="button" class="btn btn-outline-secondary">
                                Create an account
                            </button>
                        </router-link>
                    </h1>
                </div>
            </div>
        </div>
       
        <div>
            <h1 style="text-align:center">WHY USE BUS TIMES</h1>

            <div style="text-align:center" class="container">
                <div class="row row-cols-2">
                    <div style="text-align:center; backgroundColor:rgb(58, 26, 26);color:white; padding:25px; borderRadius:15px"
                        class="col">
                        <span uk-icon="icon: bell; ratio:4"></span>
                        <h4 style="color:lightgray">Always stay up to date</h4>
                    </div>
                    <div style="text-align:center; backgroundColor:rgb(58, 26, 26);color:white; padding:25px; borderRadius:15px"
                        class="col">
                        <span uk-icon="icon: download; ratio:4"></span>
                        <h4 style="color:lightgray">Download bus schedule easly</h4>

                    </div>
                    <div style="text-align:center; backgroundColor:rgb(58, 26, 26);color:white; padding:25px; borderRadius:15px"
                        class="col">
                        <span uk-icon="icon: future; ratio:4"></span>
                        <h4 style="color:lightgray">Catch bus trips digital</h4>

                    </div>
                    <div style="text-align:center; backgroundColor:rgb(58, 26, 26);color:white; padding:25px; borderRadius:15px"
                        class="col">
                        <span uk-icon="icon: file-edit; ratio:4"></span>
                        <h4 style="color:lightgray">Make bus booking in a minute</h4>

                    </div>
                </div>
            </div>
            <div style="margin-top:10px;padding:25px; backgroundColor:rgb(58, 26, 26); borderRadius:7px 7px 0px 0px;">
                <figure>
                    <blockquote style="color:rgb(255, 255, 255)" class="blockquote">
                        <p>Since i started using this website, I was able to catch my school trips without any problems regarding time. #AlwaysPunctual</p>
                    </blockquote>
                    <figcaption class="blockquote-footer">
                        Karabo Mogale
                    </figcaption>
                </figure>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    name: "hereos",
};
</script>
