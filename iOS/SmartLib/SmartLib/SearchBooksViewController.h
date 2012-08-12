/*   GNU Public Licence
 *   SearchBooksViewController View for searching through library's books.
 *
 *   Copyright (C) 2012 University of Cyprus
 *   This program is free software: you can redistribute it and/or modify it under
 *   the terms of the GNU General Public License as published by the Free Software
 *   Foundation, either version 3 of the License, or at your option) any later version.
 *
 *   This program is distributed in the hope that it will be useful, but
 *   WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or
 *   FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more
 *   details.
 *
 *   You should have received a copy of the GNU General Public License along with
 *   this program. If not, see <http://www.gnu.org/licenses/>.
 *
 *  @file SearchBooksViewController.h
 *  @brief View for searching through library's books.
 *
 *  @author Chrysovalantis Anastasiou
 *  @affiliation
 *      Data Management Systems Laboratory
 *      Dept. of Computer Science
 *      University of Cyprus
 *      P.O. Box 20537
 *      1678 Nicosia, CYPRUS
 *      Web: http://dmsl.cs.ucy.ac.cy/
 *      Email: dmsl@cs.ucy.ac.cy
 *      Tel: +357-22-892755
 *      Fax: +357-22-892701
 *
 *  @bug No known bugs.
 */

#import <UIKit/UIKit.h>

@interface SearchBooksViewController : UITableViewController <UISearchBarDelegate, UIAlertViewDelegate>
{
    IBOutlet UISearchBar *searchField;
}

@property (nonatomic, retain) IBOutlet UISearchBar *searchField;
@property (nonatomic, retain) NSMutableArray *results;

-(IBAction)borrowBook:(id)sender;
-(IBAction)deleteBook:(id)sender;
-(IBAction)bookInfo:(id)sender;
-(IBAction)mainMenu:(id)sender;
-(IBAction)refreshResults:(id)sender;

@end