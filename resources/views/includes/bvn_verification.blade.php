<form action = "/bvn/verify" method = "post">
                        @csrf
                      <div class="form-group">
                        <label for="exampleFormControlInput1">BVN number</label>
                        <input type="number" maxlength="11" name = "bvn" class="form-control" id="exampleFormControlInput1" placeholder="12345678901" data-toggle="tooltip" data-placement="top" title="Your details will be verified via your Bank Verification Number">
                      </div>

                      <div class="form-group">
                          <input type = "submit" class="form-control btn btn-dark" value="Verify">
                      </div>
                </form>