# Remove rabbit

## Overview

The Rabbit Removal Tool is a PHP script designed to facilitate the process of finding and deleting specific files (referred to as "rabbit") from a specified disk volume on a system. This tool is particularly useful for users who need to clean up unwanted files quickly.

## Purpose

This script helps users to:
- Locate files matching a given name on a specified disk.
- Delete those files safely and efficiently.
- Log the deletion process for reference.

## Script Breakdown

The following actions are performed by the script:

1. **Receive Command-Line Arguments:**
   - The script accepts two command-line arguments:
     - **Disk Name:** The disk volume from which to search (e.g., `sda1`).
     - **File Name:** The name of the file to search and delete.

2. **Find Files:**
   - It uses the `find` command to search for files on the specified disk that match the provided name. If spaces are present in the file name, they are properly escaped.

3. **Log Results:**
   - The script writes the paths of found files to a `result.txt` file for logging purposes.

4. **Delete Files:**
   - It reads the `result.txt` file, deletes each listed file using the `rm -f` command, and echoes a confirmation message for each deletion.

5. **Final Message:**
   - After all deletions are completed, it outputs a final message indicating that the process is complete.

## Requirements

- PHP version 5.4 or higher.
- Access to the command line and permissions to delete files from the specified disk.
- The script should be executed in an environment where the PHP CLI is available.

## Usage

1. **Ensure Permissions:**
   Make sure you have the necessary permissions to delete files on the specified disk.

2. **Execute the Script:**
   Run the script from the command line using the following syntax:
   ```bash
   php rabbit_removal_tool.php <disk_name> <file_name>
   ```
   Replace `<disk_name>` with the name of the disk (e.g., `sda1`) and `<file_name>` with the exact name of the file you wish to remove.

   **Example:**
   ```bash
   php rabbit_removal_tool.php sda1 unwanted_file.txt
   ```

3. **Check the Results:**
   After execution, check the terminal for output confirming the deletion of files, and review the `result.txt` file for a log of all found files that were targeted for deletion.

## Important Notes

- **Data Loss Warning:** This script permanently deletes files without moving them to the trash. Use with caution and ensure you really want to delete the specified files.
- **Spaces in Filenames:** The script handles spaces in filenames but requires them to be properly quoted when executing the command.
- **Testing:** It's advisable to test the script with a non-critical file before using it on important data to verify that it behaves as expected.

## Troubleshooting

If you encounter issues:
- Ensure that the disk name and file name are correctly specified.
- Check for permission errors; you may need to run the script with elevated privileges (e.g., using `sudo`).

## Conclusion

The Rabbit Removal Tool script is an effective solution for quickly locating and deleting unwanted files from a specified disk on a Linux system. By following the instructions in this README, users can efficiently manage their file deletions while minimizing the risk of accidental data loss.