<?php
class Blog
{
    /*
     * NOTE - code snippet to illustrate NULLABLE return type
     * - missing other code so will not run ....
     */

    public function blogFromId (int $id): ?Blog {
        if (is_numeric($id) && $id > 0) {
            return $this->blogRepository->find($id);
        }
        return NULL;
    }

}