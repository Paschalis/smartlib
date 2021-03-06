/*   GNU Public Licence
 *   SearchViewResultsCell Custom cell for search results table.
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
 *  @file SearchViewResultsCell.m
 *  @brief Custom cell for search results table.
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

#import "SearchViewResultsCell.h"

@implementation SearchViewResultsCell

@synthesize bookTitle, availability, bookCover, borrowBook, deleteBook, bookInfo;

- (id)initWithStyle:(UITableViewCellStyle)style reuseIdentifier:(NSString *)reuseIdentifier
{
    self = [super initWithStyle:style reuseIdentifier:@"book"];
    if (self) {
        // Initialization code
    }
    return self;
}

- (void)setSelected:(BOOL)selected animated:(BOOL)animated
{
//    [super setSelected:selected animated:animated];
//
//    // Configure the view for the selected state
//    if (selected) {
//        self.accessoryType = UITableViewCellAccessoryCheckmark;
//    }
//    else {
//        self.accessoryType = UITableViewCellAccessoryNone;
//    }
    
}

-(void)dealloc
{
    bookTitle = nil;
    [bookInfo release];
    [bookCover release];
    [borrowBook release];
    [deleteBook release];
    availability = nil;
    [super dealloc];
}

@end
