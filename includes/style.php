<style>
  /* Style the custom dropdown */
  .custom-select {
    position: relative;
    display: inline-block;
    width: 200px;
  }
  
  /* Style the display button */
  .select-selected {
    background-color: #ddd;
    padding: 10px;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: space-between;
  }
  
  /* Style the options list */
  .select-items {
    display: none;
    position: absolute;
    background-color: #fff;
    border: 1px solid #ddd;
    width: 100%;
    z-index: 1;
  }
  
  .select-items div {
    padding: 10px;
    cursor: pointer;
    display: flex;
    align-items: center;
  }
  
  .select-items div:hover {
    background-color: #f1f1f1;
  }
  
  /* Style images inside options */
  .select-items img {
    width: 20px;
    height: 20px;
    margin-right: 10px;
  }
</style>