<?php include('header.php') ?>

  <div id="panel">
     <H1>ToDo List</H1>
      <div id="todo-list">
      <ul>
        <li class="clearfix">
          <div class="checkbox"></div>
          <div class="content">Lorem, ipsum dolor.</div>
          <div class="action">
            <div class="delete">x</div>
          </div>
        </li>
        
        <li class="complete">
          <div class="checkbox"></div>
          <div class="content">Lorem, ipsum dolor.</div>
          <div class="action">
            <div class="delete">x</div>
          </div>
        </li>
        
        <li class="clearfix">
          <div class="checkbox"></div>
          <div class="content">Lorem, ipsum dolor.</div>
          <div class="action">
            <div class="delete">x</div>
          </div>
        </li>

        <li class="new">
          <div class="checkbox"></div>
          <div class="content" contenteditable="true"></div>
          <div class="action">
            <!-- <div class="delete">x</div> -->
          </div>
        </li>
      </ul>
    </div>
  </div>

  <!--HandleBar template-->
  <script id="todolist-template" type="text/x-handlebars-template">
        <li data-id={{id}} class="{{#if is_complete}}complete{{/if}}">
          <div class="checkbox"></div>
          <div class="content">{{content}}</div>
          <div class="action">
            <div class="delete">x</div>
          </div>
        </li>
  </script>

<?php include('footer.php') ?>