{if isset($totalPages)}
<nav aria-label="Page navigation example">
  <ul class="pagination">
    {if isset($prevPage)}
    <li class="page-item">
      <a class="page-link" href="browse-page.php?page={$prevPage}" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    {/if}

    {section name="i" loop=$totalPages}
        <li class="page-item {if $smarty.section.i.iteration == $page}active{/if}"><a class="page-link" href="browse-page.php?page={$smarty.section.i.iteration}">{$smarty.section.i.iteration}</a></li>
    {/section}

    {if isset($nextPage)}
    <li class="page-item">
      <a class="page-link" href="browse-page.php?page={$nextPage}" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
    {/if}

{*
    <li class="page-item">
      <a class="page-link" {if $page<$number_of_pages} href="browse-page.php?page={$page+1}"{else}href=""{/if} aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
*}
  </ul>
</nav>
{/if}